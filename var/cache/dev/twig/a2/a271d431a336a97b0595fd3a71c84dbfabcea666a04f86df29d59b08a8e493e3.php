<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_01ab22293a64081a3cd4646e9e1cde5b6020ba0a40251d5aae407d0a6c967466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfc11c342a63870ec3c6293e2bacca33e0a5d26433fdb488594843f579a4988a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc11c342a63870ec3c6293e2bacca33e0a5d26433fdb488594843f579a4988a->enter($__internal_bfc11c342a63870ec3c6293e2bacca33e0a5d26433fdb488594843f579a4988a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f9b58775c733a2a1a4d2eea7ba7c9f72e6a14a118f489e616db3e5cab0e51538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b58775c733a2a1a4d2eea7ba7c9f72e6a14a118f489e616db3e5cab0e51538->enter($__internal_f9b58775c733a2a1a4d2eea7ba7c9f72e6a14a118f489e616db3e5cab0e51538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfc11c342a63870ec3c6293e2bacca33e0a5d26433fdb488594843f579a4988a->leave($__internal_bfc11c342a63870ec3c6293e2bacca33e0a5d26433fdb488594843f579a4988a_prof);

        
        $__internal_f9b58775c733a2a1a4d2eea7ba7c9f72e6a14a118f489e616db3e5cab0e51538->leave($__internal_f9b58775c733a2a1a4d2eea7ba7c9f72e6a14a118f489e616db3e5cab0e51538_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba6c0a596bc722f978fa38a13105d00e1286015be4090d3de1a9769364cd75e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6c0a596bc722f978fa38a13105d00e1286015be4090d3de1a9769364cd75e3->enter($__internal_ba6c0a596bc722f978fa38a13105d00e1286015be4090d3de1a9769364cd75e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4f4543d22838094782816d33d528ded30933b5d0531f6109dd6982b48d0c5eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4543d22838094782816d33d528ded30933b5d0531f6109dd6982b48d0c5eac->enter($__internal_4f4543d22838094782816d33d528ded30933b5d0531f6109dd6982b48d0c5eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4f4543d22838094782816d33d528ded30933b5d0531f6109dd6982b48d0c5eac->leave($__internal_4f4543d22838094782816d33d528ded30933b5d0531f6109dd6982b48d0c5eac_prof);

        
        $__internal_ba6c0a596bc722f978fa38a13105d00e1286015be4090d3de1a9769364cd75e3->leave($__internal_ba6c0a596bc722f978fa38a13105d00e1286015be4090d3de1a9769364cd75e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
