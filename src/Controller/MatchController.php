<?php

namespace App\Controller;

use App\Entity\Matchs;
use App\Entity\Teams;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ManagerRegistry as Doctrine;

class MatchController extends AbstractController
{
    private $doctrine = null;

    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    /**
     * @Route ("/match/index")
     */
    public function index()
    {
        return ($this->render('match/index.html.twig'));
    }

    /**
     * @Route ("/match/play")
     */
    public function play()
    {
        $teams = $this->doctrine->getRepository(Teams::class)->findAll();
        return ($this->render('match/play.html.twig', ["teams" => $teams]));
    }

    /**
     * @Route ("/match/generate")
     */
    public function generate()
    {
        $team_1_id = (isset($_GET) && isset($_GET['teamId'])) ? $_GET['teamId'] : -1;
        if ($team_1_id == -1) {
            echo "Error: bad id";
            die;
        }
        $team_1 = $this->doctrine->getRepository(Teams::class)->find($team_1_id);
        $team_2 = $this->doctrine->getRepository(Teams::class)->createQueryBuilder('opponent')
            ->andWhere('opponent.skill_mu >=' . ($team_1->getSkillMu() - $team_1->getSkillSigma()))
            ->andWhere('opponent.skill_mu <=' . ($team_1->getSkillMu() + $team_1->getSkillSigma()))
            ->andWhere('opponent.id !=' . $team_1->getId())
            ->getQuery()
            ->getResult();
        $team_2 = $team_2[rand(0, count($team_2) - 1)];
        $start = new \DateTime();
        $end = new \DateTime();
        $winner = rand(0, 2);

        $end->add(new \DateInterval('PT2H'));
        //$start = $start->format('d-m-Y H:i:s');
        //$end = $end->format('d-m-Y H:i:s');
        $match = new Matchs();
        $match->setIdTeam1($team_1->getId());
        $match->setIdTeam2($team_2->getId());
        $match->setStart($start);
        $match->setEnd($end);
        $match->setWinner($winner);
        $this->doctrine->getManager()->persist($match);
        $this->doctrine->getManager()->flush();
        $this->updateTeamsSkills($team_1, $team_2, $winner);
        return ($this->render('match/opposition.html.twig', ["team_1" => $team_1, "team_2" => $team_2, "start" => $start->format('d-m-Y H:i:s'), "end" => $end->format('d-m-Y H:i:s'), "winner" => $winner]));
    }

    private function updateTeamsSkills(Teams $team_1, Teams $team_2, int $winner)
    {
        $team_1->setSkillSigma(($team_1->getSkillSigma() - 1 >= 0) ? $team_1->getSkillSigma() - 1 : 0);
        $team_2->setSkillSigma(($team_2->getSkillSigma() - 1 >= 0) ? $team_2->getSkillSigma() - 1 : 0);
        switch ($winner) {
            case 0:
                break;
            case 1:
                $team_1->setSkillMu(($team_1->getSkillMu() + 1) ? $team_1->getSkillMu() + 1 : 0);
                $team_2->setSkillMu(($team_2->getSkillMu() - 1 >= 0) ? $team_2->getSkillMu() - 1 : 0);
                break;
            case 2:
                $team_2->setSkillMu(($team_2->getSkillMu() + 1) ? $team_2->getSkillMu() + 1 : 0);
                $team_1->setSkillMu(($team_1->getSkillMu() - 1 >= 0) ? $team_1->getSkillMu() - 1 : 0);
                break;
            default:
                break;
        }
        $this->doctrine->getManager()->persist($team_1);
        $this->doctrine->getManager()->persist($team_2);
        $this->doctrine->getManager()->flush();
    }
}
