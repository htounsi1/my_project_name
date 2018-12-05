<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_273c5b795094df727b4e6bbf76bfadb8bc59860950db2b63ff24addb599abb7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273c5b795094df727b4e6bbf76bfadb8bc59860950db2b63ff24addb599abb7a->enter($__internal_273c5b795094df727b4e6bbf76bfadb8bc59860950db2b63ff24addb599abb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a186356945f8b5a1dd88d6af8f197b3fca48272cad0c8d2ebe351b3d701a20d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a186356945f8b5a1dd88d6af8f197b3fca48272cad0c8d2ebe351b3d701a20d1->enter($__internal_a186356945f8b5a1dd88d6af8f197b3fca48272cad0c8d2ebe351b3d701a20d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_273c5b795094df727b4e6bbf76bfadb8bc59860950db2b63ff24addb599abb7a->leave($__internal_273c5b795094df727b4e6bbf76bfadb8bc59860950db2b63ff24addb599abb7a_prof);

        
        $__internal_a186356945f8b5a1dd88d6af8f197b3fca48272cad0c8d2ebe351b3d701a20d1->leave($__internal_a186356945f8b5a1dd88d6af8f197b3fca48272cad0c8d2ebe351b3d701a20d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa1c802aec92125416250d62c984255c536480a8810a3836b56aef1ebdcbbd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1c802aec92125416250d62c984255c536480a8810a3836b56aef1ebdcbbd74->enter($__internal_fa1c802aec92125416250d62c984255c536480a8810a3836b56aef1ebdcbbd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_651a16f44a29df948d5e32dd0536f26997ec693de1910d08ed0808e00fa7ca4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651a16f44a29df948d5e32dd0536f26997ec693de1910d08ed0808e00fa7ca4d->enter($__internal_651a16f44a29df948d5e32dd0536f26997ec693de1910d08ed0808e00fa7ca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_651a16f44a29df948d5e32dd0536f26997ec693de1910d08ed0808e00fa7ca4d->leave($__internal_651a16f44a29df948d5e32dd0536f26997ec693de1910d08ed0808e00fa7ca4d_prof);

        
        $__internal_fa1c802aec92125416250d62c984255c536480a8810a3836b56aef1ebdcbbd74->leave($__internal_fa1c802aec92125416250d62c984255c536480a8810a3836b56aef1ebdcbbd74_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccc586af4ddac2042a14d16f59e82df8f40a9163b30b54f9192affa107eb85d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc586af4ddac2042a14d16f59e82df8f40a9163b30b54f9192affa107eb85d8->enter($__internal_ccc586af4ddac2042a14d16f59e82df8f40a9163b30b54f9192affa107eb85d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_84f8f37dd4c75fd94cfbaa8b430fb867e711bb22e58fb6c11fa0ee2076910ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f8f37dd4c75fd94cfbaa8b430fb867e711bb22e58fb6c11fa0ee2076910ba8->enter($__internal_84f8f37dd4c75fd94cfbaa8b430fb867e711bb22e58fb6c11fa0ee2076910ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84f8f37dd4c75fd94cfbaa8b430fb867e711bb22e58fb6c11fa0ee2076910ba8->leave($__internal_84f8f37dd4c75fd94cfbaa8b430fb867e711bb22e58fb6c11fa0ee2076910ba8_prof);

        
        $__internal_ccc586af4ddac2042a14d16f59e82df8f40a9163b30b54f9192affa107eb85d8->leave($__internal_ccc586af4ddac2042a14d16f59e82df8f40a9163b30b54f9192affa107eb85d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebab4efcbc46551c231b35e6cb3de0fdb1c921b0e717ecb8aecd00f7eacdd239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebab4efcbc46551c231b35e6cb3de0fdb1c921b0e717ecb8aecd00f7eacdd239->enter($__internal_ebab4efcbc46551c231b35e6cb3de0fdb1c921b0e717ecb8aecd00f7eacdd239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b09ed4db9509a563f1b1fa6683e5761ec4d05355fd2e09afc893016718a2422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b09ed4db9509a563f1b1fa6683e5761ec4d05355fd2e09afc893016718a2422->enter($__internal_5b09ed4db9509a563f1b1fa6683e5761ec4d05355fd2e09afc893016718a2422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b09ed4db9509a563f1b1fa6683e5761ec4d05355fd2e09afc893016718a2422->leave($__internal_5b09ed4db9509a563f1b1fa6683e5761ec4d05355fd2e09afc893016718a2422_prof);

        
        $__internal_ebab4efcbc46551c231b35e6cb3de0fdb1c921b0e717ecb8aecd00f7eacdd239->leave($__internal_ebab4efcbc46551c231b35e6cb3de0fdb1c921b0e717ecb8aecd00f7eacdd239_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
