<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_55d8b57b679b2fff5e26a0c94863259db2abf9adbd575e57fdbd3c934c1efccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d8b57b679b2fff5e26a0c94863259db2abf9adbd575e57fdbd3c934c1efccd->enter($__internal_55d8b57b679b2fff5e26a0c94863259db2abf9adbd575e57fdbd3c934c1efccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_edb869b57a6ce961ba986f8fcf2055ed7cba6c4039235e510056410b6d17af2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb869b57a6ce961ba986f8fcf2055ed7cba6c4039235e510056410b6d17af2c->enter($__internal_edb869b57a6ce961ba986f8fcf2055ed7cba6c4039235e510056410b6d17af2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55d8b57b679b2fff5e26a0c94863259db2abf9adbd575e57fdbd3c934c1efccd->leave($__internal_55d8b57b679b2fff5e26a0c94863259db2abf9adbd575e57fdbd3c934c1efccd_prof);

        
        $__internal_edb869b57a6ce961ba986f8fcf2055ed7cba6c4039235e510056410b6d17af2c->leave($__internal_edb869b57a6ce961ba986f8fcf2055ed7cba6c4039235e510056410b6d17af2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be51c97cefbee3928c1f0c41fcfbfa015dd22715abfe235c0b20f260c0132018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be51c97cefbee3928c1f0c41fcfbfa015dd22715abfe235c0b20f260c0132018->enter($__internal_be51c97cefbee3928c1f0c41fcfbfa015dd22715abfe235c0b20f260c0132018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7eb8dd143ceb14f69dfa9f68e875663ab1df81739dfe780679e322575dcaae2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb8dd143ceb14f69dfa9f68e875663ab1df81739dfe780679e322575dcaae2b->enter($__internal_7eb8dd143ceb14f69dfa9f68e875663ab1df81739dfe780679e322575dcaae2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7eb8dd143ceb14f69dfa9f68e875663ab1df81739dfe780679e322575dcaae2b->leave($__internal_7eb8dd143ceb14f69dfa9f68e875663ab1df81739dfe780679e322575dcaae2b_prof);

        
        $__internal_be51c97cefbee3928c1f0c41fcfbfa015dd22715abfe235c0b20f260c0132018->leave($__internal_be51c97cefbee3928c1f0c41fcfbfa015dd22715abfe235c0b20f260c0132018_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_191697ca956c6dd7ad9d026e2918bcecfc8aa594cc32d6a54cf09e067b1a2a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191697ca956c6dd7ad9d026e2918bcecfc8aa594cc32d6a54cf09e067b1a2a51->enter($__internal_191697ca956c6dd7ad9d026e2918bcecfc8aa594cc32d6a54cf09e067b1a2a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_140380482f0a7af0cab88bc50b26d26e9f41ed24242d1d9ca518264ebf34b8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140380482f0a7af0cab88bc50b26d26e9f41ed24242d1d9ca518264ebf34b8b7->enter($__internal_140380482f0a7af0cab88bc50b26d26e9f41ed24242d1d9ca518264ebf34b8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_140380482f0a7af0cab88bc50b26d26e9f41ed24242d1d9ca518264ebf34b8b7->leave($__internal_140380482f0a7af0cab88bc50b26d26e9f41ed24242d1d9ca518264ebf34b8b7_prof);

        
        $__internal_191697ca956c6dd7ad9d026e2918bcecfc8aa594cc32d6a54cf09e067b1a2a51->leave($__internal_191697ca956c6dd7ad9d026e2918bcecfc8aa594cc32d6a54cf09e067b1a2a51_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e52345da9ee92f1b4cb8e30083af5b45dae417831bda0f9d2af45ff57da132db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52345da9ee92f1b4cb8e30083af5b45dae417831bda0f9d2af45ff57da132db->enter($__internal_e52345da9ee92f1b4cb8e30083af5b45dae417831bda0f9d2af45ff57da132db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d6df11d54d4c191bf811473e74309a5564eb6afe8b09a00ab4a1d8d949af8d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6df11d54d4c191bf811473e74309a5564eb6afe8b09a00ab4a1d8d949af8d97->enter($__internal_d6df11d54d4c191bf811473e74309a5564eb6afe8b09a00ab4a1d8d949af8d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d6df11d54d4c191bf811473e74309a5564eb6afe8b09a00ab4a1d8d949af8d97->leave($__internal_d6df11d54d4c191bf811473e74309a5564eb6afe8b09a00ab4a1d8d949af8d97_prof);

        
        $__internal_e52345da9ee92f1b4cb8e30083af5b45dae417831bda0f9d2af45ff57da132db->leave($__internal_e52345da9ee92f1b4cb8e30083af5b45dae417831bda0f9d2af45ff57da132db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Ark_Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
