<?php

/* partials/footer.html.twig */
class __TwigTemplate_7a046c74cd370da2a00d6bddb22f7e901bd0aae25c594b6cca825a78e10411b6 extends Twig_Template
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
        echo "<!-- Footer -->
<footer>
    <div class=\"container text-center\">
        <p>Copyright &copy; ";
        // line 4
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo " 2018 &middot; by <a href=\"\">Dragana Pijnappel</a></p>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Footer -->
<footer>
    <div class=\"container text-center\">
        <p>Copyright &copy; {{ site.title }} 2018 &middot; by <a href=\"\">Dragana Pijnappel</a></p>
    </div>
</footer>", "partials/footer.html.twig", "C:\\Users\\jpi22110\\Documents\\Development\\Personal Development\\DPhotography\\user\\themes\\grayscale\\templates\\partials\\footer.html.twig");
    }
}
