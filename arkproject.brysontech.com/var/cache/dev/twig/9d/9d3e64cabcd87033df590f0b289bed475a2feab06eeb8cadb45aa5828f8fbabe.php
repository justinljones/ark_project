<?php

/* Homepage/index.html.twig */
class __TwigTemplate_bc14055b1110cd3e31de4ef27d6d66a4c48ba8e1a726a207c1f672d81ca63d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Homepage/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f42e6fc508692b44076e67c26308b382bc2d8707f8b9ad8f7875871bf970ae22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42e6fc508692b44076e67c26308b382bc2d8707f8b9ad8f7875871bf970ae22->enter($__internal_f42e6fc508692b44076e67c26308b382bc2d8707f8b9ad8f7875871bf970ae22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Homepage/index.html.twig"));

        $__internal_3e6e4b4fe32a914510ba20dae6f77f94c624c046bacf6ecd645f58b1ccf10a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6e4b4fe32a914510ba20dae6f77f94c624c046bacf6ecd645f58b1ccf10a11->enter($__internal_3e6e4b4fe32a914510ba20dae6f77f94c624c046bacf6ecd645f58b1ccf10a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f42e6fc508692b44076e67c26308b382bc2d8707f8b9ad8f7875871bf970ae22->leave($__internal_f42e6fc508692b44076e67c26308b382bc2d8707f8b9ad8f7875871bf970ae22_prof);

        
        $__internal_3e6e4b4fe32a914510ba20dae6f77f94c624c046bacf6ecd645f58b1ccf10a11->leave($__internal_3e6e4b4fe32a914510ba20dae6f77f94c624c046bacf6ecd645f58b1ccf10a11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05dc67ed16e24eeb81e84172e48175c0f55ab1a5554e83638ab54f9c8870a51c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05dc67ed16e24eeb81e84172e48175c0f55ab1a5554e83638ab54f9c8870a51c->enter($__internal_05dc67ed16e24eeb81e84172e48175c0f55ab1a5554e83638ab54f9c8870a51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0346d8e4c0afec8e9d602c88b1997091466ae2e1a84640b2ff85cfbd0f049b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0346d8e4c0afec8e9d602c88b1997091466ae2e1a84640b2ff85cfbd0f049b32->enter($__internal_0346d8e4c0afec8e9d602c88b1997091466ae2e1a84640b2ff85cfbd0f049b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <div class =\"container\">
       <div>
           <h1>The Ark Project</h1>
       </div>
       <div>
           <button class=\"btn btn-primary\">
               Login
           </button>
       </div>
   </div>
";
        
        $__internal_0346d8e4c0afec8e9d602c88b1997091466ae2e1a84640b2ff85cfbd0f049b32->leave($__internal_0346d8e4c0afec8e9d602c88b1997091466ae2e1a84640b2ff85cfbd0f049b32_prof);

        
        $__internal_05dc67ed16e24eeb81e84172e48175c0f55ab1a5554e83638ab54f9c8870a51c->leave($__internal_05dc67ed16e24eeb81e84172e48175c0f55ab1a5554e83638ab54f9c8870a51c_prof);

    }

    public function getTemplateName()
    {
        return "Homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
   <div class =\"container\">
       <div>
           <h1>The Ark Project</h1>
       </div>
       <div>
           <button class=\"btn btn-primary\">
               Login
           </button>
       </div>
   </div>
{% endblock %}


", "Homepage/index.html.twig", "/var/www/html/Ark_Project/arkproject.brysontech.com/app/Resources/views/Homepage/index.html.twig");
    }
}
