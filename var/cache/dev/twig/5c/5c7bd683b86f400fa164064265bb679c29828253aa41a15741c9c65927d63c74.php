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

/* video/edit.html.twig */
class __TwigTemplate_9062af1f1ac9bf2234386ac7c04c5b830d862f2da14e2ea2956d1bcc292f2869 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "video/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit ReissueRequest";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    ";
        // line 8
        echo twig_include($this->env, $context, "video/_form.html.twig", ["button_label" => "Update / Save"]);
        echo "

    <section class=\"justify-content-center\" >
        <div class=\"container\" style=\"margin-top: 0\">
            <div class=\"row justify-content-center\" style=\"margin-top: 0\">
                <div class=\"col-md-10  flex-column align-items-center justify-content-center\" style=\"margin-top: 0\">
                    <div class=\"card m-0\" style=\"margin-top: 0\">
                        <div class=\"row justify-content-center align-content-center mb-4 mt-0\">

                            <div class=\"form-group col-md-2\">
                                ";
        // line 18
        if (twig_matches("/^[0-9]+\$/", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18))) {
            // line 19
            echo "                                    <a class=\"btn btn-primary w-100\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_status", ["status" => "Approved", "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 19), "value", [], "any", false, true, false, 19), "id", [], "any", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 19), "value", [], "any", false, true, false, 19), "id", [], "any", false, false, false, 19)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 19), "value", [], "any", false, true, false, 19), "id", [], "any", false, false, false, 19)) : ("0"))]), "html", null, true);
            echo "\">Approve</a>
                                ";
        }
        // line 21
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                ";
        // line 24
        if (twig_matches("/^[0-9]+\$/", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24))) {
            // line 25
            echo "                                    <a class=\"btn btn-danger w-100\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_status", ["status" => "Rejected", "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 25), "value", [], "any", false, true, false, 25), "id", [], "any", true, true, false, 25) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 25), "value", [], "any", false, true, false, 25), "id", [], "any", false, false, false, 25)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 25), "value", [], "any", false, true, false, 25), "id", [], "any", false, false, false, 25)) : ("0"))]), "html", null, true);
            echo "\">Reject</a>
                                ";
        }
        // line 27
        echo "
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <a class=\"btn btn-primary mb-3 mx-5\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_index");
        echo "\">back to dashboard</a>

    ";
        // line 40
        echo twig_include($this->env, $context, "video/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "video/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  129 => 40,  124 => 38,  111 => 27,  105 => 25,  103 => 24,  98 => 21,  92 => 19,  90 => 18,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit ReissueRequest{% endblock %}

{% block body %}


    {{ include('video/_form.html.twig', {'button_label': 'Update / Save'}) }}

    <section class=\"justify-content-center\" >
        <div class=\"container\" style=\"margin-top: 0\">
            <div class=\"row justify-content-center\" style=\"margin-top: 0\">
                <div class=\"col-md-10  flex-column align-items-center justify-content-center\" style=\"margin-top: 0\">
                    <div class=\"card m-0\" style=\"margin-top: 0\">
                        <div class=\"row justify-content-center align-content-center mb-4 mt-0\">

                            <div class=\"form-group col-md-2\">
                                {% if form.vars.value.id matches '/^[0-9]+\$/' %}
                                    <a class=\"btn btn-primary w-100\" href=\"{{ path('update_status', {'status': 'Approved', 'id':form.vars.value.id ?? '0'}) }}\">Approve</a>
                                {% endif %}

                            </div>
                            <div class=\"form-group col-md-2\">
                                {% if form.vars.value.id matches '/^[0-9]+\$/'%}
                                    <a class=\"btn btn-danger w-100\" href=\"{{ path('update_status',{'status': 'Rejected', 'id':form.vars.value.id ?? '0'}) }}\">Reject</a>
                                {% endif %}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <a class=\"btn btn-primary mb-3 mx-5\" href=\"{{ path('app_videos_index') }}\">back to dashboard</a>

    {{ include('video/_delete_form.html.twig') }}
{% endblock %}
", "video/edit.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\trainingvideos\\templates\\video\\edit.html.twig");
    }
}
