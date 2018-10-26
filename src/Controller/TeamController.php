<?php

namespace App\Controller;

use App\Entity\Matchs;
use App\Entity\Teams;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ManagerRegistry as Doctrine;



class TeamController extends AbstractController
{
    public $id = null;
    private $doctrine = null;
    private $teams = [];
    private $team = null;
    private $matchs = [];
    private $victoryNb = [];
    private $defeatNb = [];

    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
        $teams = $this->doctrine->getRepository(Teams::class)->findAll();

        foreach ($teams as $team) {
            $this->teams[$team->getId()] = $team;
        }
    }

    private function getMatchsByTeamId($id)
    {
        $this->matchs[$id] = $this->doctrine->getManager()->getRepository(Matchs::class)->createQueryBuilder("match")
            ->andWhere("match.id_team1 = '" . $id . "'")
            ->orWhere("match.id_team2 = '" . $id . "'")
            ->getQuery()
            ->getResult();
    }

    private function getMatchArgs($id)
    {
        $this->victoryNb[$id] = 0;
        $this->defeatNb[$id] = 0;
        foreach ($this->matchs[$id] as $match) {
            if (($match->getIdTeam1() == $id && $match->getWinner() == 1) ||
                ($match->getIdTeam2() == $id && $match->getWinner() == 2))
                $this->victoryNb[$id] = ($this->victoryNb[$id]) ? $this->victoryNb[$id] + 1 : 1;
            else if ($match->getWinner() != 0) {
                $this->defeatNb[$id] = ($this->defeatNb[$id]) ? $this->defeatNb[$id] + 1 : 1;
            }
            $match->setDuration($match->getStart()->diff($match->getEnd())->format('0%h:%i%i'));
        }
    }


    private function getTeamById()
    {
        $this->team = $this->doctrine->getManager()->getRepository(Teams::class)->find($this->id);
    }

    /**
     * @Route("/team/index")
     */
    public function index()
    {
        if (isset($_GET) && isset($_GET['id'])) {
            $this->id = $_GET['id'];

            $this->getTeamById();

            $this->getMatchsByTeamId($this->team->getId());
            $this->getMatchArgs($this->team->getId());
            return ($this->render('team/index.html.twig', ["team" => $this->team, "teams" => $this->teams, "matchs" => $this->matchs, "victory" => $this->victoryNb, "defeat" => $this->defeatNb]));
        }
        return (null);
    }

    /**
     * @Route("/team/ranking")
     */
    public function ranking() {
      $this->getMatchsByTeamsId();
      return ($this->render('team/ranking.html.twig', ["teams"=> $this->teams, "victory" => $this->victoryNb, "defeat"=> $this->defeatNb]));
    }

    private function getMatchsByTeamsId()
    {
      foreach($this->teams as $team)
      {
        $this->getMatchsByTeamId($team->getId());
        $this->getMatchArgs($team->getId());
      }
    }
}
