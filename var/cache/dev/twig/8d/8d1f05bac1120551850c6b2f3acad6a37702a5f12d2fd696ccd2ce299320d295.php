<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa186555673aa80cb48f8823fda2f1ca30fe96069e251237a95808bfbfa5804a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa186555673aa80cb48f8823fda2f1ca30fe96069e251237a95808bfbfa5804a->enter($__internal_aa186555673aa80cb48f8823fda2f1ca30fe96069e251237a95808bfbfa5804a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d44f015a9f3890a8bedcd41d917681d041f51fe3090e89301bbf46598837d80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44f015a9f3890a8bedcd41d917681d041f51fe3090e89301bbf46598837d80c->enter($__internal_d44f015a9f3890a8bedcd41d917681d041f51fe3090e89301bbf46598837d80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_aa186555673aa80cb48f8823fda2f1ca30fe96069e251237a95808bfbfa5804a->leave($__internal_aa186555673aa80cb48f8823fda2f1ca30fe96069e251237a95808bfbfa5804a_prof);

        
        $__internal_d44f015a9f3890a8bedcd41d917681d041f51fe3090e89301bbf46598837d80c->leave($__internal_d44f015a9f3890a8bedcd41d917681d041f51fe3090e89301bbf46598837d80c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbdde9887c064a4a2ec7dd41ca2696f420990bdcb57e7a739bba735dc872558b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbdde9887c064a4a2ec7dd41ca2696f420990bdcb57e7a739bba735dc872558b->enter($__internal_fbdde9887c064a4a2ec7dd41ca2696f420990bdcb57e7a739bba735dc872558b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11b64b9812ad02470dea54980be870286fb0c1881a6838395a06517b8a4cc30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b64b9812ad02470dea54980be870286fb0c1881a6838395a06517b8a4cc30d->enter($__internal_11b64b9812ad02470dea54980be870286fb0c1881a6838395a06517b8a4cc30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_11b64b9812ad02470dea54980be870286fb0c1881a6838395a06517b8a4cc30d->leave($__internal_11b64b9812ad02470dea54980be870286fb0c1881a6838395a06517b8a4cc30d_prof);

        
        $__internal_fbdde9887c064a4a2ec7dd41ca2696f420990bdcb57e7a739bba735dc872558b->leave($__internal_fbdde9887c064a4a2ec7dd41ca2696f420990bdcb57e7a739bba735dc872558b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_718669cab619623be56cac17a15b33ffe0009f1460aeae16f102adc271edf17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718669cab619623be56cac17a15b33ffe0009f1460aeae16f102adc271edf17d->enter($__internal_718669cab619623be56cac17a15b33ffe0009f1460aeae16f102adc271edf17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d7f37d518cb53f8747e257d8d70af8dbc75f474f152c5c3f460d02da8c12ab72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f37d518cb53f8747e257d8d70af8dbc75f474f152c5c3f460d02da8c12ab72->enter($__internal_d7f37d518cb53f8747e257d8d70af8dbc75f474f152c5c3f460d02da8c12ab72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d7f37d518cb53f8747e257d8d70af8dbc75f474f152c5c3f460d02da8c12ab72->leave($__internal_d7f37d518cb53f8747e257d8d70af8dbc75f474f152c5c3f460d02da8c12ab72_prof);

        
        $__internal_718669cab619623be56cac17a15b33ffe0009f1460aeae16f102adc271edf17d->leave($__internal_718669cab619623be56cac17a15b33ffe0009f1460aeae16f102adc271edf17d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_95453d5978e5294b373ce210d0f5c4dadda3c78406690ecd59e760d9c01886b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95453d5978e5294b373ce210d0f5c4dadda3c78406690ecd59e760d9c01886b5->enter($__internal_95453d5978e5294b373ce210d0f5c4dadda3c78406690ecd59e760d9c01886b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e24d07fb10290b2a15e86e5dd4e630fdb770de37460f8f0a67886277d26907c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e24d07fb10290b2a15e86e5dd4e630fdb770de37460f8f0a67886277d26907c->enter($__internal_1e24d07fb10290b2a15e86e5dd4e630fdb770de37460f8f0a67886277d26907c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e24d07fb10290b2a15e86e5dd4e630fdb770de37460f8f0a67886277d26907c->leave($__internal_1e24d07fb10290b2a15e86e5dd4e630fdb770de37460f8f0a67886277d26907c_prof);

        
        $__internal_95453d5978e5294b373ce210d0f5c4dadda3c78406690ecd59e760d9c01886b5->leave($__internal_95453d5978e5294b373ce210d0f5c4dadda3c78406690ecd59e760d9c01886b5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3758bda943cc8293b748424a690b2bbca6d4c2555f6e902875c887c86a7f9fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3758bda943cc8293b748424a690b2bbca6d4c2555f6e902875c887c86a7f9fdb->enter($__internal_3758bda943cc8293b748424a690b2bbca6d4c2555f6e902875c887c86a7f9fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6368cedd8686a33e8f5fc56787060166224ba67f864561bf8bf32b2d8690d9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6368cedd8686a33e8f5fc56787060166224ba67f864561bf8bf32b2d8690d9c4->enter($__internal_6368cedd8686a33e8f5fc56787060166224ba67f864561bf8bf32b2d8690d9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6368cedd8686a33e8f5fc56787060166224ba67f864561bf8bf32b2d8690d9c4->leave($__internal_6368cedd8686a33e8f5fc56787060166224ba67f864561bf8bf32b2d8690d9c4_prof);

        
        $__internal_3758bda943cc8293b748424a690b2bbca6d4c2555f6e902875c887c86a7f9fdb->leave($__internal_3758bda943cc8293b748424a690b2bbca6d4c2555f6e902875c887c86a7f9fdb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\my_project_name\\app\\Resources\\views\\base.html.twig");
    }
}
