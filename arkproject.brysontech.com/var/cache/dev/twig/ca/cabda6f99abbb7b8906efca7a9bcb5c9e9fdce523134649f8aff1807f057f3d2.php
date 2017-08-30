<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21966a8611598f5d347cfa233a7c9cfedd1b6bac3d4ce0fb0f6d7afc6e690340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21966a8611598f5d347cfa233a7c9cfedd1b6bac3d4ce0fb0f6d7afc6e690340->enter($__internal_21966a8611598f5d347cfa233a7c9cfedd1b6bac3d4ce0fb0f6d7afc6e690340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_af499f07727b5c8e07e715091ca86f363bf6d0a69b9f345e60f2bf0a39095ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af499f07727b5c8e07e715091ca86f363bf6d0a69b9f345e60f2bf0a39095ca5->enter($__internal_af499f07727b5c8e07e715091ca86f363bf6d0a69b9f345e60f2bf0a39095ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21966a8611598f5d347cfa233a7c9cfedd1b6bac3d4ce0fb0f6d7afc6e690340->leave($__internal_21966a8611598f5d347cfa233a7c9cfedd1b6bac3d4ce0fb0f6d7afc6e690340_prof);

        
        $__internal_af499f07727b5c8e07e715091ca86f363bf6d0a69b9f345e60f2bf0a39095ca5->leave($__internal_af499f07727b5c8e07e715091ca86f363bf6d0a69b9f345e60f2bf0a39095ca5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05b4ce89c3962f5809d915c36f53762886e7172c7c041d624c2479c591b8d672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b4ce89c3962f5809d915c36f53762886e7172c7c041d624c2479c591b8d672->enter($__internal_05b4ce89c3962f5809d915c36f53762886e7172c7c041d624c2479c591b8d672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ea0c623d61bfb755352bd08c024303a7b9195afd9cbf987bbda27fb552998b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea0c623d61bfb755352bd08c024303a7b9195afd9cbf987bbda27fb552998b9->enter($__internal_5ea0c623d61bfb755352bd08c024303a7b9195afd9cbf987bbda27fb552998b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5ea0c623d61bfb755352bd08c024303a7b9195afd9cbf987bbda27fb552998b9->leave($__internal_5ea0c623d61bfb755352bd08c024303a7b9195afd9cbf987bbda27fb552998b9_prof);

        
        $__internal_05b4ce89c3962f5809d915c36f53762886e7172c7c041d624c2479c591b8d672->leave($__internal_05b4ce89c3962f5809d915c36f53762886e7172c7c041d624c2479c591b8d672_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2e9e1c63562f510496fd06a00ad32e6635f935f57ed220d1afd52cdb2954c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e9e1c63562f510496fd06a00ad32e6635f935f57ed220d1afd52cdb2954c8c->enter($__internal_d2e9e1c63562f510496fd06a00ad32e6635f935f57ed220d1afd52cdb2954c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9c926192e7d83ca2d35cc4a538cdf78ad1bf2d4e3433bc31edf55d4729aac49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c926192e7d83ca2d35cc4a538cdf78ad1bf2d4e3433bc31edf55d4729aac49->enter($__internal_a9c926192e7d83ca2d35cc4a538cdf78ad1bf2d4e3433bc31edf55d4729aac49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a9c926192e7d83ca2d35cc4a538cdf78ad1bf2d4e3433bc31edf55d4729aac49->leave($__internal_a9c926192e7d83ca2d35cc4a538cdf78ad1bf2d4e3433bc31edf55d4729aac49_prof);

        
        $__internal_d2e9e1c63562f510496fd06a00ad32e6635f935f57ed220d1afd52cdb2954c8c->leave($__internal_d2e9e1c63562f510496fd06a00ad32e6635f935f57ed220d1afd52cdb2954c8c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8bbdf1eb0bfaf82eddbbbaf0ae4ec180389f8904268883a3280f3590e96d343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bbdf1eb0bfaf82eddbbbaf0ae4ec180389f8904268883a3280f3590e96d343->enter($__internal_d8bbdf1eb0bfaf82eddbbbaf0ae4ec180389f8904268883a3280f3590e96d343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ce37be3be4416ba610a78e020559673ffa7d2de981b9a7013b9bc015c252b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce37be3be4416ba610a78e020559673ffa7d2de981b9a7013b9bc015c252b28->enter($__internal_9ce37be3be4416ba610a78e020559673ffa7d2de981b9a7013b9bc015c252b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9ce37be3be4416ba610a78e020559673ffa7d2de981b9a7013b9bc015c252b28->leave($__internal_9ce37be3be4416ba610a78e020559673ffa7d2de981b9a7013b9bc015c252b28_prof);

        
        $__internal_d8bbdf1eb0bfaf82eddbbbaf0ae4ec180389f8904268883a3280f3590e96d343->leave($__internal_d8bbdf1eb0bfaf82eddbbbaf0ae4ec180389f8904268883a3280f3590e96d343_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Ark_Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
