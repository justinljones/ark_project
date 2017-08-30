<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
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
        $__internal_cc4fa6a2fc83193051e046d8d536009e8272648d0a4faff976de3f909e5ca3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4fa6a2fc83193051e046d8d536009e8272648d0a4faff976de3f909e5ca3e3->enter($__internal_cc4fa6a2fc83193051e046d8d536009e8272648d0a4faff976de3f909e5ca3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_15049e1f435c086b17e98551535b39c04178783c4eb5a88146cf73167096d820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15049e1f435c086b17e98551535b39c04178783c4eb5a88146cf73167096d820->enter($__internal_15049e1f435c086b17e98551535b39c04178783c4eb5a88146cf73167096d820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_cc4fa6a2fc83193051e046d8d536009e8272648d0a4faff976de3f909e5ca3e3->leave($__internal_cc4fa6a2fc83193051e046d8d536009e8272648d0a4faff976de3f909e5ca3e3_prof);

        
        $__internal_15049e1f435c086b17e98551535b39c04178783c4eb5a88146cf73167096d820->leave($__internal_15049e1f435c086b17e98551535b39c04178783c4eb5a88146cf73167096d820_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41f57d2b9296162e854ab5340daba47f3faaf8ec26e28f2f386835d886711cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f57d2b9296162e854ab5340daba47f3faaf8ec26e28f2f386835d886711cfc->enter($__internal_41f57d2b9296162e854ab5340daba47f3faaf8ec26e28f2f386835d886711cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac2f64649ca0285aaeab91e37b5b1ae229c43ff64cbd4d2ef3676f4917300d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2f64649ca0285aaeab91e37b5b1ae229c43ff64cbd4d2ef3676f4917300d17->enter($__internal_ac2f64649ca0285aaeab91e37b5b1ae229c43ff64cbd4d2ef3676f4917300d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "The Ark Project";
        
        $__internal_ac2f64649ca0285aaeab91e37b5b1ae229c43ff64cbd4d2ef3676f4917300d17->leave($__internal_ac2f64649ca0285aaeab91e37b5b1ae229c43ff64cbd4d2ef3676f4917300d17_prof);

        
        $__internal_41f57d2b9296162e854ab5340daba47f3faaf8ec26e28f2f386835d886711cfc->leave($__internal_41f57d2b9296162e854ab5340daba47f3faaf8ec26e28f2f386835d886711cfc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95a9de3982a42d33d10de1366729f690aedd2e4206699ee445058a7b4c0e3b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a9de3982a42d33d10de1366729f690aedd2e4206699ee445058a7b4c0e3b06->enter($__internal_95a9de3982a42d33d10de1366729f690aedd2e4206699ee445058a7b4c0e3b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e136dd00d9f8aa258cabaf0f625daab5ed21101a349e89f3da3f6552eacf9caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e136dd00d9f8aa258cabaf0f625daab5ed21101a349e89f3da3f6552eacf9caf->enter($__internal_e136dd00d9f8aa258cabaf0f625daab5ed21101a349e89f3da3f6552eacf9caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" 
                  type=\"text/css\" 
                  href=\"";
        // line 9
        echo "web/css/bootstrap.min.css";
        echo "\">
        ";
        
        $__internal_e136dd00d9f8aa258cabaf0f625daab5ed21101a349e89f3da3f6552eacf9caf->leave($__internal_e136dd00d9f8aa258cabaf0f625daab5ed21101a349e89f3da3f6552eacf9caf_prof);

        
        $__internal_95a9de3982a42d33d10de1366729f690aedd2e4206699ee445058a7b4c0e3b06->leave($__internal_95a9de3982a42d33d10de1366729f690aedd2e4206699ee445058a7b4c0e3b06_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_61bdf88366f0442c755ddd586b9e1c9f42520685cde39daf91b9fa18d3b6d246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61bdf88366f0442c755ddd586b9e1c9f42520685cde39daf91b9fa18d3b6d246->enter($__internal_61bdf88366f0442c755ddd586b9e1c9f42520685cde39daf91b9fa18d3b6d246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de4402a43cb6db756d35a20e3f5450799864c8f0c54a54cf542e4488050d8cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4402a43cb6db756d35a20e3f5450799864c8f0c54a54cf542e4488050d8cc4->enter($__internal_de4402a43cb6db756d35a20e3f5450799864c8f0c54a54cf542e4488050d8cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de4402a43cb6db756d35a20e3f5450799864c8f0c54a54cf542e4488050d8cc4->leave($__internal_de4402a43cb6db756d35a20e3f5450799864c8f0c54a54cf542e4488050d8cc4_prof);

        
        $__internal_61bdf88366f0442c755ddd586b9e1c9f42520685cde39daf91b9fa18d3b6d246->leave($__internal_61bdf88366f0442c755ddd586b9e1c9f42520685cde39daf91b9fa18d3b6d246_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d66c77fd770e9f3077b1f338bbc99b37ddd02a6b20c1a0c846515b57acddfdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d66c77fd770e9f3077b1f338bbc99b37ddd02a6b20c1a0c846515b57acddfdc->enter($__internal_5d66c77fd770e9f3077b1f338bbc99b37ddd02a6b20c1a0c846515b57acddfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_12efa7a26384eb02360787a517dc1348f170a47c92dc033a93a0c872e3427565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12efa7a26384eb02360787a517dc1348f170a47c92dc033a93a0c872e3427565->enter($__internal_12efa7a26384eb02360787a517dc1348f170a47c92dc033a93a0c872e3427565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"web/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_12efa7a26384eb02360787a517dc1348f170a47c92dc033a93a0c872e3427565->leave($__internal_12efa7a26384eb02360787a517dc1348f170a47c92dc033a93a0c872e3427565_prof);

        
        $__internal_5d66c77fd770e9f3077b1f338bbc99b37ddd02a6b20c1a0c846515b57acddfdc->leave($__internal_5d66c77fd770e9f3077b1f338bbc99b37ddd02a6b20c1a0c846515b57acddfdc_prof);

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
        return array (  134 => 16,  125 => 15,  108 => 14,  96 => 9,  92 => 7,  83 => 6,  65 => 5,  53 => 18,  50 => 15,  48 => 14,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}The Ark Project{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" 
                  type=\"text/css\" 
                  href=\"{{('web/css/bootstrap.min.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"web/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Ark_Project/arkproject.brysontech.com/app/Resources/views/base.html.twig");
    }
}
