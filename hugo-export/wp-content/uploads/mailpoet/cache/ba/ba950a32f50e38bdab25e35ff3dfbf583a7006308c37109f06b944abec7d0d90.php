<?php

/* form/templates/blocks/submit.hbs */
class __TwigTemplate_a8aff0c52dc82d946abbc55f28dbe43e25216736a006856ca02ed51e258fb580 extends Twig_Template
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
        echo "<input type=\"submit\" value=\"{{ params.label }}\" class=\"button\" />";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/submit.hbs";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/blocks/submit.hbs", "/home/senseiba/public_html/wp-content/plugins/mailpoet/views/form/templates/blocks/submit.hbs");
    }
}
