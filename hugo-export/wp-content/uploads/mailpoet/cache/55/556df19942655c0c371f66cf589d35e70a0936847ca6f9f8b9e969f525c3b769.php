<?php

/* form/templates/settings/required.hbs */
class __TwigTemplate_e5ef80ad812be12d5048923f88323de95b5c5e75160f2a934d319d20df17b77b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p class=\"clearfix\">
  <label>";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Is this field mandatory?");
        echo "</label>
  <span class=\"group\">
    <label>
      <input type=\"radio\"
        class=\"mailpoet_radio\"
        name=\"params[required]\"
        value=\"1\"
        {{#if params.required}}checked=\"checked\"{{/if}} />";
        // line 9
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
    </label>
    <label>
      <input
        class=\"mailpoet_radio\"
        type=\"radio\"
        name=\"params[required]\"
        value=\"\"
        {{#unless params.required}}checked=\"checked\"{{/unless}} />";
        // line 17
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
    </label>
  </span>
</p>";
    }

    public function getTemplateName()
    {
        return "form/templates/settings/required.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 17,  32 => 9,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/settings/required.hbs", "/home/senseiba/public_html/wp-content/plugins/mailpoet/views/form/templates/settings/required.hbs");
    }
}
