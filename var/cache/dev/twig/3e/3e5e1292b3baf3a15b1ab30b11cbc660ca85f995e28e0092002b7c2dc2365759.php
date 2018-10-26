<?php

/* match/opposition.html.twig */
class __TwigTemplate_f7113fa2caf0dfafe659c730cc44ce372e5b8ab449291e2edd74a3b1170f83c5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "match/opposition.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "match/opposition.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    <title>Match</title>
  </head>
  <body>
      <nav class=\"navbar navbar-dark bg-dark\">
          <div class=\"container-fluid\">
            <div class=\"navbar-header\">
              <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000/team/ranking\">LeaderBoard</a>
            </div>
          </div>
      </nav>
    <input hidden id=\"team1_id\" type=\"\" name=\"team1_id\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team_1"]) || array_key_exists("team_1", $context) ? $context["team_1"] : (function () { throw new Twig_Error_Runtime('Variable "team_1" does not exist.', 18, $this->source); })()), "getId", array(), "method"), "html", null, true);
        echo "\">
    <span>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</span>
    <h1>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team_1"]) || array_key_exists("team_1", $context) ? $context["team_1"] : (function () { throw new Twig_Error_Runtime('Variable "team_1" does not exist.', 20, $this->source); })()), "name", array()), "html", null, true);
        echo " versus ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team_2"]) || array_key_exists("team_2", $context) ? $context["team_2"] : (function () { throw new Twig_Error_Runtime('Variable "team_2" does not exist.', 20, $this->source); })()), "name", array()), "html", null, true);
        echo "</h1>
    ";
        // line 21
        if (((isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new Twig_Error_Runtime('Variable "winner" does not exist.', 21, $this->source); })()) == 0)) {
            // line 22
            echo "        <p>Math nul :( !</p>
    ";
        } elseif ((        // line 23
(isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new Twig_Error_Runtime('Variable "winner" does not exist.', 23, $this->source); })()) == 1)) {
            // line 24
            echo "        <p>Victoire de : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team_1"]) || array_key_exists("team_1", $context) ? $context["team_1"] : (function () { throw new Twig_Error_Runtime('Variable "team_1" does not exist.', 24, $this->source); })()), "name", array()), "html", null, true);
            echo "</p>
    ";
        } elseif ((        // line 25
(isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new Twig_Error_Runtime('Variable "winner" does not exist.', 25, $this->source); })()) == 2)) {
            // line 26
            echo "        <p>Victoire de : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team_2"]) || array_key_exists("team_2", $context) ? $context["team_2"] : (function () { throw new Twig_Error_Runtime('Variable "team_2" does not exist.', 26, $this->source); })()), "name", array()), "html", null, true);
            echo "</p>
    ";
        }
        // line 28
        echo "    <button type=\"button\" name=\"button\">Return back to team page</button>
    <script type=\"text/javascript\">
      \$(document).ready(() => {
          \$('button').click(() => {
            const id = \$('#team1_id').val();

            window.location.href = \"http://127.0.0.1:8000/team/index?&id=\" + id;
          });
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
        return "match/opposition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  78 => 26,  76 => 25,  71 => 24,  69 => 23,  66 => 22,  64 => 21,  58 => 20,  52 => 19,  48 => 18,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    <title>Match</title>
  </head>
  <body>
      <nav class=\"navbar navbar-dark bg-dark\">
          <div class=\"container-fluid\">
            <div class=\"navbar-header\">
              <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000/team/ranking\">LeaderBoard</a>
            </div>
          </div>
      </nav>
    <input hidden id=\"team1_id\" type=\"\" name=\"team1_id\" value=\"{{team_1.getId()}}\">
    <span>{{ start }} - {{ end }}</span>
    <h1>{{ team_1.name }} versus {{ team_2.name }}</h1>
    {% if winner == 0 %}
        <p>Math nul :( !</p>
    {% elseif winner == 1 %}
        <p>Victoire de : {{ team_1.name }}</p>
    {% elseif winner == 2 %}
        <p>Victoire de : {{ team_2.name }}</p>
    {% endif %}
    <button type=\"button\" name=\"button\">Return back to team page</button>
    <script type=\"text/javascript\">
      \$(document).ready(() => {
          \$('button').click(() => {
            const id = \$('#team1_id').val();

            window.location.href = \"http://127.0.0.1:8000/team/index?&id=\" + id;
          });
      });
    </script>
  </body>
</html>
", "match/opposition.html.twig", "/home/petat_m/Projet/WEB_leaderboard_2018/templates/match/opposition.html.twig");
    }
}
