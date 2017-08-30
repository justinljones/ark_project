<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
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
        $__internal_9be91341250e55c27ca9cf9372230220b1b101fe6a76c7346aa73fc672b56bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be91341250e55c27ca9cf9372230220b1b101fe6a76c7346aa73fc672b56bec->enter($__internal_9be91341250e55c27ca9cf9372230220b1b101fe6a76c7346aa73fc672b56bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c526c76354522e6e9082873effb308fd8ea78d605c1f0f15361cd7ae90eed7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c526c76354522e6e9082873effb308fd8ea78d605c1f0f15361cd7ae90eed7b4->enter($__internal_c526c76354522e6e9082873effb308fd8ea78d605c1f0f15361cd7ae90eed7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be91341250e55c27ca9cf9372230220b1b101fe6a76c7346aa73fc672b56bec->leave($__internal_9be91341250e55c27ca9cf9372230220b1b101fe6a76c7346aa73fc672b56bec_prof);

        
        $__internal_c526c76354522e6e9082873effb308fd8ea78d605c1f0f15361cd7ae90eed7b4->leave($__internal_c526c76354522e6e9082873effb308fd8ea78d605c1f0f15361cd7ae90eed7b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_341caab6da0908993fb9039528f0129b752f46f7df917c4f4d699f13c498a5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341caab6da0908993fb9039528f0129b752f46f7df917c4f4d699f13c498a5f1->enter($__internal_341caab6da0908993fb9039528f0129b752f46f7df917c4f4d699f13c498a5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b198a1217c8ebb726f231063e4773a61bf2ad5b749b856e56043566896afbffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b198a1217c8ebb726f231063e4773a61bf2ad5b749b856e56043566896afbffd->enter($__internal_b198a1217c8ebb726f231063e4773a61bf2ad5b749b856e56043566896afbffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b198a1217c8ebb726f231063e4773a61bf2ad5b749b856e56043566896afbffd->leave($__internal_b198a1217c8ebb726f231063e4773a61bf2ad5b749b856e56043566896afbffd_prof);

        
        $__internal_341caab6da0908993fb9039528f0129b752f46f7df917c4f4d699f13c498a5f1->leave($__internal_341caab6da0908993fb9039528f0129b752f46f7df917c4f4d699f13c498a5f1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2be2b7ed3c51d418ee281d911ad0452e771e71de59159889b90f7869a002858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2be2b7ed3c51d418ee281d911ad0452e771e71de59159889b90f7869a002858->enter($__internal_d2be2b7ed3c51d418ee281d911ad0452e771e71de59159889b90f7869a002858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c62a0378c5ae76f8ff3b73313a269bf14f070e6d45dc825e627a42ef2420d3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62a0378c5ae76f8ff3b73313a269bf14f070e6d45dc825e627a42ef2420d3f8->enter($__internal_c62a0378c5ae76f8ff3b73313a269bf14f070e6d45dc825e627a42ef2420d3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c62a0378c5ae76f8ff3b73313a269bf14f070e6d45dc825e627a42ef2420d3f8->leave($__internal_c62a0378c5ae76f8ff3b73313a269bf14f070e6d45dc825e627a42ef2420d3f8_prof);

        
        $__internal_d2be2b7ed3c51d418ee281d911ad0452e771e71de59159889b90f7869a002858->leave($__internal_d2be2b7ed3c51d418ee281d911ad0452e771e71de59159889b90f7869a002858_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a417849a01e4e41e61476760e1a7a1654168cbd17b0a2a751b0f65255b8fef1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a417849a01e4e41e61476760e1a7a1654168cbd17b0a2a751b0f65255b8fef1d->enter($__internal_a417849a01e4e41e61476760e1a7a1654168cbd17b0a2a751b0f65255b8fef1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd5711529ab52cd2fb53c8a8df682dc019bd73ab848442f2c28e893251c57bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5711529ab52cd2fb53c8a8df682dc019bd73ab848442f2c28e893251c57bcf->enter($__internal_bd5711529ab52cd2fb53c8a8df682dc019bd73ab848442f2c28e893251c57bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd5711529ab52cd2fb53c8a8df682dc019bd73ab848442f2c28e893251c57bcf->leave($__internal_bd5711529ab52cd2fb53c8a8df682dc019bd73ab848442f2c28e893251c57bcf_prof);

        
        $__internal_a417849a01e4e41e61476760e1a7a1654168cbd17b0a2a751b0f65255b8fef1d->leave($__internal_a417849a01e4e41e61476760e1a7a1654168cbd17b0a2a751b0f65255b8fef1d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Ark_Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
