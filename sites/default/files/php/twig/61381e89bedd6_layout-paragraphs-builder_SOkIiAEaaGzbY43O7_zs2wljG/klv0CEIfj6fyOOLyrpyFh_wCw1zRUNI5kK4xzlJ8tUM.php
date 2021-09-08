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

/* modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-controls.html.twig */
class __TwigTemplate_3db54438c93298471f296d597c59284b01c79ecff376f32e3cec2ee947eefe94 extends \Twig\Template
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
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 1, $this->source), "html", null, true);
        echo ">
    <a class=\"lpb-drag\" href=\"#nav\"><span>";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Nav"));
        echo "</span></a>
    <span class=\"lpb-controls-label\">";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 3, $this->source), "html", null, true);
        echo "</span>
    <a class=\"lpb-up\" href=\"#move-up\"><span>";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Move Up"));
        echo "</span></a>
    <a class=\"lpb-down\" href=\"#move-down\"><span>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Move Down"));
        echo "</span></a>
    ";
        // line 6
        if (($context["edit_attributes"] ?? null)) {
            echo "<a";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["edit_attributes"] ?? null), 6, $this->source), "html", null, true);
            echo "><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Edit"));
            echo "</span></a>";
        }
        // line 7
        echo "    ";
        if (($context["delete_attributes"] ?? null)) {
            echo "<a";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["delete_attributes"] ?? null), 7, $this->source), "html", null, true);
            echo "><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Delete"));
            echo "</span></a>";
        }
        // line 8
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-controls.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  68 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-controls.html.twig", "/app/modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-controls.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("escape" => 1, "t" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
