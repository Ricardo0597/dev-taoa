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

/* modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-component-menu.html.twig */
class __TwigTemplate_25a68bc9970697d21dcac58c5a4211d9370e0c253b6ff34d6bfce817b6c6a40f extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 1, $this->source), "html", null, true);
        echo ">
  <h4 class=\"visually-hidden\">";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add Item"));
        echo "</h4>
  <div class=\"lpb-component-list__search\">
    <input class=\"lpb-component-list-search-input\" type=\"text\" placeholder=\"Filter items...\" />
  </div>
  <div class=\"lpb-component-list__group\">
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["types"] ?? null), "layout", [], "any", false, false, true, 7)) {
            // line 8
            echo "    <div class=\"lpb-component-list__group--layout\">
    ";
        }
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["types"] ?? null), "layout", [], "any", false, false, true, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 11
            echo "      <div class=\"lpb-component-list__item type-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo " is-layout\">
        <a";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["type"], "link_attributes", [], "any", false, false, true, 12), "setAttribute", [0 => "href", 1 => twig_get_attribute($this->env, $this->source, $context["type"], "url", [], "any", false, false, true, 12)], "method", false, false, true, 12), 12, $this->source), "html", null, true);
            echo ">";
            if (twig_get_attribute($this->env, $this->source, $context["type"], "image", [], "any", false, false, true, 12)) {
                echo "<img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "image", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\" alt =\"\" />";
            }
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "label", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["types"] ?? null), "layout", [], "any", false, false, true, 15)) {
            // line 16
            echo "    </div>
    ";
        }
        // line 18
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["types"] ?? null), "content", [], "any", false, false, true, 18)) {
            // line 19
            echo "    <div class=\"lpb-component-list__group--content\">
    ";
        }
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["types"] ?? null), "content", [], "any", false, false, true, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 22
            echo "      <div class=\"lpb-component-list__item type-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\">
        <a";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["type"], "link_attributes", [], "any", false, false, true, 23), "setAttribute", [0 => "href", 1 => twig_get_attribute($this->env, $this->source, $context["type"], "url", [], "any", false, false, true, 23)], "method", false, false, true, 23), 23, $this->source), "html", null, true);
            echo ">";
            if (twig_get_attribute($this->env, $this->source, $context["type"], "image", [], "any", false, false, true, 23)) {
                echo "<img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "image", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "\" alt =\"\" />";
            }
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "label", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["types"] ?? null), "content", [], "any", false, false, true, 26)) {
            // line 27
            echo "    </div>
    ";
        }
        // line 29
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-component-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 29,  127 => 27,  124 => 26,  108 => 23,  103 => 22,  98 => 21,  94 => 19,  91 => 18,  87 => 16,  84 => 15,  68 => 12,  63 => 11,  58 => 10,  54 => 8,  52 => 7,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-component-menu.html.twig", "/app/modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-component-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "for" => 10);
        static $filters = array("escape" => 1, "t" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
