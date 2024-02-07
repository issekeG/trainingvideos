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

/* category/_form.html.twig */
class __TwigTemplate_862de71581a0a9ed126530a71a3f4d59b2569dfaa16a8a1eb9b639e54e905e94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/_form.html.twig"));

        // line 1
        echo "
<main>
    <div class=\"container pb-0\" >
        <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center\" >
            <div class=\"container\">
                <div class=\"row justify-content-center\">

                    <div class=\"col-md-8  flex-column align-items-center justify-content-center\">

                        <div class=\"d-flex justify-content-center py-4\">
                            <a class=\"logo d-flex align-items-center w-auto\">
                                <span class=\"d-none d-lg-block\">Form</span>
                            </a>
                        </div>

                        <div class=\"card\">
                            <div class=\"px-4 row\" style=\"margin-bottom: 0\">
                                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "

                                <label class=\"form-label my-4\">Add Category : </label>

                                <div class=\"col-12  mb-4\">
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter the Category</div>
                                </div>

                                <div class=\"row justify-content-center align-content-center\">

                                    <div class=\"form-group col-md-3 mb-5\">
                                        <button class=\"btn btn-success\">";
        // line 30
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 30, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

                                    </div>

                                </div>
                                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "category/_form.html.twig";
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
        return array (  85 => 35,  77 => 30,  67 => 23,  59 => 18,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<main>
    <div class=\"container pb-0\" >
        <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center\" >
            <div class=\"container\">
                <div class=\"row justify-content-center\">

                    <div class=\"col-md-8  flex-column align-items-center justify-content-center\">

                        <div class=\"d-flex justify-content-center py-4\">
                            <a class=\"logo d-flex align-items-center w-auto\">
                                <span class=\"d-none d-lg-block\">Form</span>
                            </a>
                        </div>

                        <div class=\"card\">
                            <div class=\"px-4 row\" style=\"margin-bottom: 0\">
                                {{ form_start(form) }}

                                <label class=\"form-label my-4\">Add Category : </label>

                                <div class=\"col-12  mb-4\">
                                    {{ form_row(form.name) }}
                                    <div class=\"invalid-feedback\">Please enter the Category</div>
                                </div>

                                <div class=\"row justify-content-center align-content-center\">

                                    <div class=\"form-group col-md-3 mb-5\">
                                        <button class=\"btn btn-success\">{{ button_label|default('Save') }}</button>

                                    </div>

                                </div>
                                {{ form_end(form) }}

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main>", "category/_form.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\trainingvideos\\templates\\category\\_form.html.twig");
    }
}
