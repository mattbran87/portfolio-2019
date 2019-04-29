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

/* modules/eu_cookie_compliance/templates/eu_cookie_compliance_popup_agreed.html.twig */
class __TwigTemplate_290f5c9e2c52a16ab85c9c61ffa5daea0e18fd1500d1a921492fd4fe8e71c6dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 27];
        $filters = ["escape" => 23];
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
        // line 19
        echo "
<div class=\"eu-cookie-compliance-banner eu-cookie-compliance-banner-thank-you\">
  <div class=\"popup-content agreed eu-cookie-compliance-content\">
    <div id=\"popup-text\" class=\"eu-cookie-compliance-message\">
      ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null)), "html", null, true);
        echo "
    </div>
    <div id=\"popup-buttons\" class=\"eu-cookie-compliance-buttons\">
      <button type=\"button\" class=\"hide-popup-button eu-cookie-compliance-hide-button\">";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hide_button"] ?? null)), "html", null, true);
        echo "</button>
      ";
        // line 27
        if (($context["find_more_button"] ?? null)) {
            // line 28
            echo "        <button type=\"button\" class=\"find-more-button eu-cookie-compliance-more-button-thank-you\" >";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["find_more_button"] ?? null)), "html", null, true);
            echo "</button>
      ";
        }
        // line 30
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/eu_cookie_compliance/templates/eu_cookie_compliance_popup_agreed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  73 => 28,  71 => 27,  67 => 26,  61 => 23,  55 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/eu_cookie_compliance/templates/eu_cookie_compliance_popup_agreed.html.twig", "C:\\Users\\Mbrandenburg\\Sites\\devdesktop11\\drupal-8.7.0-beta1\\modules\\eu_cookie_compliance\\templates\\eu_cookie_compliance_popup_agreed.html.twig");
    }
}
