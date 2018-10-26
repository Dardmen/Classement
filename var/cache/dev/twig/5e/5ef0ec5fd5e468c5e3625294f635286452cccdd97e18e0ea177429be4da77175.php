<?php

/* team/ranking.html.twig */
class __TwigTemplate_f9298b9e9f8042febd4b637f1c1070b8875e3aab2c83471203b15bc017a05174 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "team/ranking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "team/ranking.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"
          integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/ranking.css"), "html", null, true);
        echo "\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
            integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"
            integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"
            integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\">
    </script>
    <title></title>
</head>
<body>
<nav class=\"navbar navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000/\">LeaderBoard</a>
        </div>
    </div>
</nav>
<table id=\"\" class=\"table table-striped table-bordered table-sm\" cellspacing=\"O\" width=\"100%\">
    <thead>
    <th class=\"th-sm\">Name
        <i class=\"fa fa-sort float-right\" aria-hidden=\"true\"></i></th>
    <th class=\"th-sm\">Skill
        <i class=\"fa fa-sort float-right\" aria-hidden=\"true\"></i></th>
    <th class=\"th-sm\">Victory
        <i class=\"fa fa-sort float-right\" aria-hidden=\"true\"></i></th>
    <th class=\"th-sm\">Defeat
        <i class=\"fa fa-sort float-right\" aria-hidden=\"true\"></i></th>
    </thead>
    <tbody>
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new Twig_Error_Runtime('Variable "teams" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 43
            echo "        <tr style=\"color: rgb(58, 179, 255)\">
            <td><a style=\"color: #666666\" href=\"http://127.0.0.1:8000/team/index?&id=";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", array()), "html", null, true);
            echo "</a>
            </td>
            <td style=\"color: #666666\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "getSkillMu", array(), "method"), "html", null, true);
            echo "</td>
            <td style=\"color: #666666\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["victory"]) || array_key_exists("victory", $context) ? $context["victory"] : (function () { throw new Twig_Error_Runtime('Variable "victory" does not exist.', 47, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["team"], "getId", array(), "method"), array(), "array"), "html", null, true);
            echo "</td>
            <td style=\"color: #666666\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defeat"]) || array_key_exists("defeat", $context) ? $context["defeat"] : (function () { throw new Twig_Error_Runtime('Variable "defeat" does not exist.', 48, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["team"], "getId", array(), "method"), array(), "array"), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </tbody>
</table>
<script type=\"text/javascript\">
    \$(document).ready(() => {
        \$('table').DataTable({
            \"order\": [1, \"desc\"]
        });
        \$('.dataTables_length').addClass('bs-select');
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
        return "team/ranking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 51,  97 => 48,  93 => 47,  89 => 46,  82 => 44,  79 => 43,  75 => 42,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"
          integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('dist/css/ranking.css') }}\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
            integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"
            integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"
            integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\">
    </script>
    <title></title>
</head>
<body>
<nav class=\"navbar navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000/\">LeaderBoard</a>
        </div>
    </div>
</nav>
<table id=\"\" class=\"table table-striped table-bordered table-sm\" cellspacing=\"O\" width=\"100%\">
    <thead>
    <th class=\"th-sm\">Name
        <i class=\"fa fa-sort float-right\" aria-hidden=\"true\"></i></th>
    <th class=\"th-sm\">Skill
        <i class=\"fa fa-sort float-right\" aria-hidden=\"true\"></i></th>
    <th class=\"th-sm\">Victory
        <i class=\"fa fa-sort float-right\" aria-hidden=\"true\"></i></th>
    <th class=\"th-sm\">Defeat
        <i class=\"fa fa-sort float-right\" aria-hidden=\"true\"></i></th>
    </thead>
    <tbody>
    {% for team in teams %}
        <tr style=\"color: rgb(58, 179, 255)\">
            <td><a style=\"color: #666666\" href=\"http://127.0.0.1:8000/team/index?&id={{ team.getId() }}\">{{ team.name }}</a>
            </td>
            <td style=\"color: #666666\">{{ team.getSkillMu() }}</td>
            <td style=\"color: #666666\">{{ victory[team.getId()] }}</td>
            <td style=\"color: #666666\">{{ defeat[team.getId()] }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
<script type=\"text/javascript\">
    \$(document).ready(() => {
        \$('table').DataTable({
            \"order\": [1, \"desc\"]
        });
        \$('.dataTables_length').addClass('bs-select');
    });
</script>
</body>
</html>
", "team/ranking.html.twig", "/home/petat_m/Projet/WEB_leaderboard_2018/templates/team/ranking.html.twig");
    }
}
