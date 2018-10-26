<?php

/* team/index.html.twig */
class __TwigTemplate_9d18cd810c96d181517fc684fde50e919f26893b8803f3b1ec57b8430defa5ef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, height=device-height\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"
          integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"
            integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
            crossorigin=\"anonymous\"></script>
    <title>Team</title>
</head>
<body id=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 19, $this->source); })()), "getId", array(), "method"), "html", null, true);
        echo "\">
<nav class=\"navbar navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000/team/ranking\">LeaderBoard</a>
        </div>
    </div>
</nav>
<div style=\"background-color: #212529;\" class=\"card text-white\">
    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("dist/img/" . twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 28, $this->source); })()), "name", array())) . ".png")), "html", null, true);
        echo "\" alt=\"\" style=\"width: 5rem; height: auto\">
    <div class=\"card-body\">
        <h2 class=\"card-title text-danger\">";
        // line 30
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 30, $this->source); })()), "name", array()) . " (") . twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 30, $this->source); })()), "getSkillMu", array(), "method")) . ") "), "html", null, true);
        echo "</h2>
        <div id=\"ratio\" data-victory=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["victory"]) || array_key_exists("victory", $context) ? $context["victory"] : (function () { throw new Twig_Error_Runtime('Variable "victory" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 31, $this->source); })()), "getId", array(), "method"), array(), "array"), "html", null, true);
        echo "\" data-defeat=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defeat"]) || array_key_exists("defeat", $context) ? $context["defeat"] : (function () { throw new Twig_Error_Runtime('Variable "defeat" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 31, $this->source); })()), "getId", array(), "method"), array(), "array"), "html", null, true);
        echo "\">
            <canvas id=\"doughnut-chart\"></canvas>
        </div>
        <ul class=\"card-text\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["matchs"]) || array_key_exists("matchs", $context) ? $context["matchs"] : (function () { throw new Twig_Error_Runtime('Variable "matchs" does not exist.', 35, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 35, $this->source); })()), "getId", array(), "method"), array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 36
            echo "                <li>
                    <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "getDuration", array(), "method"), "html", null, true);
            echo "</span>
                    <h5>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new Twig_Error_Runtime('Variable "teams" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["match"], "getIdTeam1", array(), "method"), array(), "array"), "name", array()), "html", null, true);
            echo "
                        ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["match"], "winner", array()) == 0)) {
                // line 40
                echo "                            <i>N</i>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 41
$context["match"], "winner", array()) == 1)) {
                // line 42
                echo "                            <i style=\"color: #28a745\">V</i>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 43
$context["match"], "winner", array()) == 2)) {
                // line 44
                echo "                            <i style=\"color: #dc3545\">D</i>
                        ";
            }
            // line 46
            echo "                        <span>-</span>
                        ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, $context["match"], "winner", array()) == 0)) {
                // line 48
                echo "                            <i>N</i>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 49
$context["match"], "winner", array()) == 1)) {
                // line 50
                echo "                            <i style=\"color: #dc3545\">D</i>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
$context["match"], "winner", array()) == 2)) {
                // line 52
                echo "                            <i style=\"color: #28a745\">V</i>
                        ";
            }
            // line 54
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new Twig_Error_Runtime('Variable "teams" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["match"], "getIdTeam2", array(), "method"), array(), "array"), "name", array()), "html", null, true);
            echo "</h5>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </ul>
        <button class=\"btn btn-danger\">Simulate match</button>
    </div>
</div>
<script>
    \$(document).ready(() => {
        \$('button').click(() => {
            const teamId = \$('body').attr('id');

            window.location.href = 'http://127.0.0.1:8000/match/generate?&teamId=' + teamId;
        });
    });
</script>
<script>
    const victory = document.getElementById(\"ratio\").dataset.victory;
    const defeat = document.getElementById(\"ratio\").dataset.defeat;
    // init chart
    const doughnutChart = document.getElementById(\"doughnut-chart\");
    const doughnutChartdata = {
        datasets: [{
            data: [victory, defeat],
            backgroundColor: [\"#28a745\", \"#dc3545\"]
        }],
        labels: ['victory', 'defeat']
    };
    const myDoughnutChart = new Chart(doughnutChart, {
        type: 'doughnut',
        data: doughnutChartdata,
    });
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 57,  129 => 54,  125 => 52,  123 => 51,  120 => 50,  118 => 49,  115 => 48,  113 => 47,  110 => 46,  106 => 44,  104 => 43,  101 => 42,  99 => 41,  96 => 40,  94 => 39,  90 => 38,  86 => 37,  83 => 36,  79 => 35,  70 => 31,  66 => 30,  61 => 28,  49 => 19,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, height=device-height\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"
          integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"
            integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
            crossorigin=\"anonymous\"></script>
    <title>Team</title>
</head>
<body id=\"{{ team.getId() }}\">
<nav class=\"navbar navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000/team/ranking\">LeaderBoard</a>
        </div>
    </div>
</nav>
<div style=\"background-color: #212529;\" class=\"card text-white\">
    <img src=\"{{ asset('dist/img/' ~ team.name ~ '.png') }}\" alt=\"\" style=\"width: 5rem; height: auto\">
    <div class=\"card-body\">
        <h2 class=\"card-title text-danger\">{{ team.name ~ ' (' ~ team.getSkillMu() ~ ') ' }}</h2>
        <div id=\"ratio\" data-victory=\"{{ victory[team.getId()] }}\" data-defeat=\"{{ defeat[team.getId()] }}\">
            <canvas id=\"doughnut-chart\"></canvas>
        </div>
        <ul class=\"card-text\">
            {% for match in matchs[team.getId()] %}
                <li>
                    <span>{{ match.getDuration() }}</span>
                    <h5>{{ teams[match.getIdTeam1()].name }}
                        {% if (match.winner == 0) %}
                            <i>N</i>
                        {% elseif (match.winner == 1) %}
                            <i style=\"color: #28a745\">V</i>
                        {% elseif (match.winner == 2) %}
                            <i style=\"color: #dc3545\">D</i>
                        {% endif %}
                        <span>-</span>
                        {% if (match.winner == 0) %}
                            <i>N</i>
                        {% elseif (match.winner == 1) %}
                            <i style=\"color: #dc3545\">D</i>
                        {% elseif (match.winner == 2) %}
                            <i style=\"color: #28a745\">V</i>
                        {% endif %}
                        {{ teams[match.getIdTeam2()].name }}</h5>
                </li>
            {% endfor %}
        </ul>
        <button class=\"btn btn-danger\">Simulate match</button>
    </div>
</div>
<script>
    \$(document).ready(() => {
        \$('button').click(() => {
            const teamId = \$('body').attr('id');

            window.location.href = 'http://127.0.0.1:8000/match/generate?&teamId=' + teamId;
        });
    });
</script>
<script>
    const victory = document.getElementById(\"ratio\").dataset.victory;
    const defeat = document.getElementById(\"ratio\").dataset.defeat;
    // init chart
    const doughnutChart = document.getElementById(\"doughnut-chart\");
    const doughnutChartdata = {
        datasets: [{
            data: [victory, defeat],
            backgroundColor: [\"#28a745\", \"#dc3545\"]
        }],
        labels: ['victory', 'defeat']
    };
    const myDoughnutChart = new Chart(doughnutChart, {
        type: 'doughnut',
        data: doughnutChartdata,
    });
</script>
</body>
</html>
", "team/index.html.twig", "/home/petat_m/Projet/WEB_leaderboard_2018/templates/team/index.html.twig");
    }
}
