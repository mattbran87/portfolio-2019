<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/eu_cookie_compliance/templates/eu_cookie_compliance_popup_info.html.twig */
class __TwigTemplate_ded029a6289f7a887b8ad7f4cac81fb48dabeb66e3fc9a57bde3d0176fef1756 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 33];
        $filters = ["escape" => 32];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        echo "
<div class=\"eu-cookie-compliance-banner eu-cookie-compliance-banner-info\">
  <div class=\"popup-content info eu-cookie-compliance-content\">
    <div id=\"popup-text\" class=\"eu-cookie-compliance-message\">
      ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null)), "html", null, true);
        echo "
      ";
        // line 33
        if (($context["disagree_button"] ?? null)) {
            // line 34
            echo "        <button type=\"button\" class=\"find-more-button eu-cookie-compliance-more-button\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["disagree_button"] ?? null)), "html", null, true);
            echo "</button>
      ";
        }
        // line 36
        echo "    </div>
    <div id=\"popup-buttons\" class=\"eu-cookie-compliance-buttons\">
      <button type=\"button\" class=\"";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary_button_class"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["agree_button"] ?? null)), "html", null, true);
        echo "</button>
      ";
        // line 39
        if (($context["secondary_button_label"] ?? null)) {
            // line 40
            echo "        <button type=\"button\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_button_class"] ?? null)), "html", null, true);
            echo "\" >";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_button_label"] ?? null)), "html", null, true);
            echo "</button>
      ";
        }
        // line 42
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/eu_cookie_compliance/templates/eu_cookie_compliance_popup_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 42,  85 => 40,  83 => 39,  77 => 38,  73 => 36,  67 => 34,  65 => 33,  61 => 32,  55 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/eu_cookie_compliance/templates/eu_cookie_compliance_popup_info.html.twig", "C:\\Users\\Mbrandenburg\\Sites\\devdesktop11\\drupal-8.7.0-beta1\\modules\\eu_cookie_compliance\\templates\\eu_cookie_compliance_popup_info.html.twig");
    }
}
