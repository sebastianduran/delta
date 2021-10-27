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

/* modules/custom/cuadrados/templates/cuadrados.html.twig */
class __TwigTemplate_8a2da893179ba9a19b37febd27bc08185a33a088270aad299034f87ecf43b868 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 28];
        $filters = ["escape" => 30];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
        // line 1
        echo "
<style type=\"text/css\">
@media (min-width: 400px) {
  .mb{
    display: block;
  }
  .max{
    display: none;
  }
}

@media(min-width: 600px){
.mb{
    display: none;
  }
.max{
    display: block;
  }
}
</style>
<script>
     screenWidth = window.screen.width,
     screenHeight = window.screen.height;
     console.log(screenWidth);
    console.log(screenHeight);
</script> 

  ";
        // line 28
        $context["mb"] = 10;
        echo " ";
        $context["max"] = 20;
        // line 29
        echo "<div class=\"mb\">
<svg  width= ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo " height=";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo ">
  <polygon points=\"
  ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 30), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 10), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 30), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 30), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 10), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 30), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 10), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 10), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 30), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 10), "html", null, true);
        echo "
  
  ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 20), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 0), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 40), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 20), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 20), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 40), "html", null, true);
        echo " 0,";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 20), "html", null, true);
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 20), "html", null, true);
        echo ",0 
 
  ";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 40), "html", null, true);
        echo ",0 ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 40), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 40), "html", null, true);
        echo " 0,";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 40), "html", null, true);
        echo " 0,0 ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 20), "html", null, true);
        echo ",0 0,0 0,";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 40), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 40), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 40), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 40), "html", null, true);
        echo ",0 ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["mb"] ?? null) * 20), "html", null, true);
        echo ",0
  \"
  style=\"fill:cyan;stroke:red;stroke-width:5;fill-rule:evenodd;\" />

</svg>

</div>

<div class=\"max\">
<svg  width= ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo " height=";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo ">
  <polygon points=\"
  ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 30), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 10), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 30), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 30), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 10), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 30), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 10), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 10), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 30), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 10), "html", null, true);
        echo "
  
  ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 20), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 0), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 20), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 20), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo " 0,";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 20), "html", null, true);
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 20), "html", null, true);
        echo ",0 
 
  ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo ",0 ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo " 0,";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo " 0,0 ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 20), "html", null, true);
        echo ",0 0,0 0,";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 40), "html", null, true);
        echo ",0 ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["max"] ?? null) * 20), "html", null, true);
        echo ",0
  \"
  style=\"fill:cyan;stroke:red;stroke-width:5;fill-rule:evenodd;\" />

</svg>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/cuadrados/templates/cuadrados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 51,  200 => 49,  177 => 47,  170 => 45,  140 => 36,  121 => 34,  98 => 32,  91 => 30,  88 => 29,  84 => 28,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/cuadrados/templates/cuadrados.html.twig", "C:\\xampp\\htdocs\\delta\\modules\\custom\\cuadrados\\templates\\cuadrados.html.twig");
    }
}
