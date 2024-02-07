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

/* video/dashboard.html.twig */
class __TwigTemplate_ec561f620ac473aaa517a22a59649218aab67cd4b4e2511c49170a34263fafc2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sidebar' => [$this, 'block_sidebar'],
            'main' => [$this, 'block_main'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "video/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New ReissueRequest ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 6
        echo "  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_index");
        echo "\">
          <i class=\"bi bi-grid\"></i>
          <span>All categories</span>
        </a>
      </li>

      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 18
            echo "          <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_category", ["category_id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">
                  <i class=\"bi bi-menu-button-wide\"></i><span>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
              </a>
          </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    </ul>

  </aside>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 31
        echo "
  <main id=\"main\" class=\"main\">

      <section class=\"section dashboard\">
          <div class=\"row\">

              <!-- Left side columns -->

              <div class=\"col-lg-12\">
                  <div class=\"row\">

                      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 43
            echo "                          <div class=\"col-xxl-4 col-md-4\">
                              <div class=\"card info-card sales-card custom-card mb-3\">
                                  <div class=\"card-body\">
                                      <div class=\"d-flex align-items-center text-center\">
                                          <div class=\"px-auto pt-2\">
                                              <div id=\"videoPlayer";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <!-- Modal -->
                              <div class=\"modal fade\" id=\"videoModal";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"videoModalLabel";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                  <div class=\"modal-dialog\" style=\"height: 380px; width: 520px\">
                                      <div class=\"modal-content\" style=\"height: 380px; width: 520px\">
                                          <div class=\"modal-header\">
                                              <h1 class=\"modal-title fs-5\" id=\"videoModalLabel";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\">Vidéo YouTube ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "status", [], "any", false, false, false, 59), "html", null, true);
            echo "</h1>
                                              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                          </div>
                                          <div class=\"modal-body\">
                                              <iframe id=\"videoIframe";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\" class=\"video-autoplay\" width=\"100%\" height=\"100%\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "getEmbedVideoLink", [], "any", false, false, false, 63), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                          </div>


                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "

                      <script>
                          var players = {};

                          function onYouTubeIframeAPIReady() {
                              ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 80
            echo "                              players[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo "] = new YT.Player('videoPlayer";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo "', {
                                  height: '100%',
                                  width: '100%',
                                  videoId: '";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "status", [], "any", false, false, false, 83), "html", null, true);
            echo "',  // Remplacez par l'ID réel de la vidéo YouTube
                                  events: {
                                      'onReady': onPlayerReady,
                                      'onStateChange': onPlayerStateChange
                                  }
                              });
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                          }

                          function onPlayerReady(event) {
                              // Vous pouvez ajouter des actions supplémentaires ici
                          }

                          function onPlayerStateChange(event) {
                              ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 98
            echo "                              if (event.data === YT.PlayerState.PLAYING && event.target === players[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 98), "html", null, true);
            echo "]) {
                                  for (var playerId in players) {
                                      if (players.hasOwnProperty(playerId) && playerId !== ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 100), "html", null, true);
            echo ") {
                                          players[playerId].pauseVideo();
                                      }
                                  }

                                  \$('#videoModal";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 105), "html", null, true);
            echo "').modal('show');
                              }
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                          }

                          document.addEventListener('DOMContentLoaded', function () {
                              ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 112
            echo "                              let modal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 112), "html", null, true);
            echo " = new bootstrap.Modal(document.getElementById('videoModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 112), "html", null, true);
            echo "'));


                              modal";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 115), "html", null, true);
            echo "._element.addEventListener('hidden.bs.modal', function () {

                                  let iframe";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 117), "html", null, true);
            echo " = document.getElementById('videoIframe";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 117), "html", null, true);
            echo "');
                                  iframe";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 118), "html", null, true);
            echo ".src = iframe";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 118), "html", null, true);
            echo ".src;
                              });
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
                          });
                      </script>





                  </div>
              </div>
          </div>
      </section>

  </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "video/dashboard.html.twig";
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
        return array (  309 => 121,  298 => 118,  292 => 117,  287 => 115,  278 => 112,  274 => 111,  269 => 108,  260 => 105,  252 => 100,  246 => 98,  242 => 97,  233 => 90,  220 => 83,  211 => 80,  207 => 79,  199 => 73,  181 => 63,  172 => 59,  163 => 55,  153 => 48,  146 => 43,  142 => 42,  129 => 31,  122 => 30,  111 => 24,  101 => 20,  97 => 19,  94 => 18,  90 => 17,  81 => 11,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New ReissueRequest {% endblock %}

{% block sidebar %}
  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"{{ path('app_video_index') }}\">
          <i class=\"bi bi-grid\"></i>
          <span>All categories</span>
        </a>
      </li>

      {% for category in categories %}
          <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('dashboard_category', {'category_id': category.id}) }}\">
                  <i class=\"bi bi-menu-button-wide\"></i><span>{{ category.name }}</span>
              </a>
          </li>
      {% endfor%}

    </ul>

  </aside>
{% endblock %}

{% block main %}

  <main id=\"main\" class=\"main\">

      <section class=\"section dashboard\">
          <div class=\"row\">

              <!-- Left side columns -->

              <div class=\"col-lg-12\">
                  <div class=\"row\">

                      {% for video in videos %}
                          <div class=\"col-xxl-4 col-md-4\">
                              <div class=\"card info-card sales-card custom-card mb-3\">
                                  <div class=\"card-body\">
                                      <div class=\"d-flex align-items-center text-center\">
                                          <div class=\"px-auto pt-2\">
                                              <div id=\"videoPlayer{{ video.id }}\"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <!-- Modal -->
                              <div class=\"modal fade\" id=\"videoModal{{ video.id }}\" tabindex=\"-1\" aria-labelledby=\"videoModalLabel{{ video.id }}\" aria-hidden=\"true\">
                                  <div class=\"modal-dialog\" style=\"height: 380px; width: 520px\">
                                      <div class=\"modal-content\" style=\"height: 380px; width: 520px\">
                                          <div class=\"modal-header\">
                                              <h1 class=\"modal-title fs-5\" id=\"videoModalLabel{{ video.id }}\">Vidéo YouTube {{ video.status }}</h1>
                                              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                          </div>
                                          <div class=\"modal-body\">
                                              <iframe id=\"videoIframe{{ video.id }}\" class=\"video-autoplay\" width=\"100%\" height=\"100%\" src=\"{{ video.getEmbedVideoLink }}\" frameborder=\"0\" allowfullscreen></iframe>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                          </div>


                      {% endfor %}


                      <script>
                          var players = {};

                          function onYouTubeIframeAPIReady() {
                              {% for video in videos %}
                              players[{{ video.id }}] = new YT.Player('videoPlayer{{ video.id }}', {
                                  height: '100%',
                                  width: '100%',
                                  videoId: '{{ video.status }}',  // Remplacez par l'ID réel de la vidéo YouTube
                                  events: {
                                      'onReady': onPlayerReady,
                                      'onStateChange': onPlayerStateChange
                                  }
                              });
                              {% endfor %}
                          }

                          function onPlayerReady(event) {
                              // Vous pouvez ajouter des actions supplémentaires ici
                          }

                          function onPlayerStateChange(event) {
                              {% for video in videos %}
                              if (event.data === YT.PlayerState.PLAYING && event.target === players[{{ video.id }}]) {
                                  for (var playerId in players) {
                                      if (players.hasOwnProperty(playerId) && playerId !== {{ video.id }}) {
                                          players[playerId].pauseVideo();
                                      }
                                  }

                                  \$('#videoModal{{ video.id }}').modal('show');
                              }
                              {% endfor %}
                          }

                          document.addEventListener('DOMContentLoaded', function () {
                              {% for video in videos %}
                              let modal{{ video.id }} = new bootstrap.Modal(document.getElementById('videoModal{{ video.id }}'));


                              modal{{ video.id }}._element.addEventListener('hidden.bs.modal', function () {

                                  let iframe{{ video.id }} = document.getElementById('videoIframe{{ video.id }}');
                                  iframe{{ video.id }}.src = iframe{{ video.id }}.src;
                              });
                              {% endfor %}

                          });
                      </script>





                  </div>
              </div>
          </div>
      </section>

  </main>
{% endblock %}






", "video/dashboard.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\trainingvideos\\templates\\video\\dashboard.html.twig");
    }
}
