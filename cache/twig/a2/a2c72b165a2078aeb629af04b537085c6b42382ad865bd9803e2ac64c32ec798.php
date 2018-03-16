<?php

/* preview.html.twig */
class __TwigTemplate_7c0ba76e77216e560e1f42df693d59fcfecce57ab068254c0ba285cbfbd895af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "preview.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content_wrapper' => array($this, 'block_content_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["route"] = ((($this->getAttribute(($context["admin"] ?? null), "route", array()) == "")) ? ("") : (("/" . $this->getAttribute(($context["admin"] ?? null), "route", array()))));
        // line 4
        $context["preview_link"] = ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . ($context["route"] ?? null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_titlebar($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "getReferrer", array(), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
        <a class=\"button\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["preview_link"] ?? null), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-external-link\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.OPEN_NEW_TAB"), "html", null, true);
        echo "</a>
    </div>
    <h1><i class=\"fa fa-fw fa-eye\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW"), "html", null, true);
        echo ": <strong>/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "route", array()), "html", null, true);
        echo "</strong></h1>
";
    }

    // line 15
    public function block_content_wrapper($context, array $blocks = array())
    {
        // line 16
        echo "
    <div class=\"content-wrapper preview-wrapper\">
        <div class=\"content-padding\" width=\"100%\" height=\"100%\">
            <iframe width=\"100%\" height=\"100%\" frameborder=\"0\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["preview_link"] ?? null), "html", null, true);
        echo "\" />
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  65 => 16,  62 => 15,  54 => 12,  47 => 10,  41 => 9,  37 => 7,  34 => 6,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% set route = admin.route == '' ? '' : '/' ~ admin.route %}
{% set preview_link = base_url_relative_frontend|rtrim('/') ~ route %}

{% block titlebar %}

    <div class=\"button-bar\">
        <a class=\"button\" href=\"{{ admin.getReferrer() }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        <a class=\"button\" href=\"{{ preview_link }}\" target=\"_blank\"><i class=\"fa fa-external-link\"></i> {{ \"PLUGIN_ADMIN.OPEN_NEW_TAB\"|tu }}</a>
    </div>
    <h1><i class=\"fa fa-fw fa-eye\"></i> {{ \"PLUGIN_ADMIN.PREVIEW\"|tu }}: <strong>/{{ admin.route }}</strong></h1>
{% endblock %}

{% block content_wrapper %}

    <div class=\"content-wrapper preview-wrapper\">
        <div class=\"content-padding\" width=\"100%\" height=\"100%\">
            <iframe width=\"100%\" height=\"100%\" frameborder=\"0\" src=\"{{ preview_link }}\" />
        </div>
    </div>
{% endblock %}
", "preview.html.twig", "/var/www/html/user/plugins/admin/themes/grav/templates/preview.html.twig");
    }
}
