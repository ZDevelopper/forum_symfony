<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sujet/show.html.twig */
class __TwigTemplate_4852ae3aad5893ae50e273603cb70192 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sujet/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sujet/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sujet/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div
\t\t\t\tclass=\"col-md-12 d-flex justify-content-around flex-wrap\">
\t\t\t\t";
        // line 8
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sujets"]) || array_key_exists("sujets", $context) ? $context["sujets"] : (function () { throw new RuntimeError('Variable "sujets" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 9
            echo "\t\t\t\t\t<div class=\"card\" style=\"width: 450px; margin-top: 50px\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\tCréé le
\t\t\t\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getDate", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getTitre", [], "any", false, false, false, 15), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_messages", ["idSujet" => twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 16)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir les messages</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sujet/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  94 => 16,  90 => 15,  84 => 12,  79 => 9,  74 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div
\t\t\t\tclass=\"col-md-12 d-flex justify-content-around flex-wrap\">
\t\t\t\t{# boucle sur le tableau \$articles du controller#}
\t\t\t\t{% for key, item in sujets %}
\t\t\t\t\t<div class=\"card\" style=\"width: 450px; margin-top: 50px\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\tCréé le
\t\t\t\t\t\t\t{{ item.getDate|date(\"d/m/Y\") }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ item.getTitre }}</h5>
\t\t\t\t\t\t\t<a href=\"{{ path('show_messages',{ idSujet:item.getId() }) }}\" class=\"btn btn-primary\">Voir les messages</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "sujet/show.html.twig", "C:\\Users\\Julien\\Documents\\Symfony\\forum\\templates\\sujet\\show.html.twig");
    }
}
