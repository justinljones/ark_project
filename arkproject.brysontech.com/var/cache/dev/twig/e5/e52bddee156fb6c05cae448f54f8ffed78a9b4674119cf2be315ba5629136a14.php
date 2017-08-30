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
        $__internal_3d35de6c39960979cb08d5aec918fcb4115e6b3fcd37184cde4991b8b5e4c5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d35de6c39960979cb08d5aec918fcb4115e6b3fcd37184cde4991b8b5e4c5b0->enter($__internal_3d35de6c39960979cb08d5aec918fcb4115e6b3fcd37184cde4991b8b5e4c5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0cf6d3acae164a015efa25922d94ef4a5ee96f33525e3fc9c2d75ac428838d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf6d3acae164a015efa25922d94ef4a5ee96f33525e3fc9c2d75ac428838d90->enter($__internal_0cf6d3acae164a015efa25922d94ef4a5ee96f33525e3fc9c2d75ac428838d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3d35de6c39960979cb08d5aec918fcb4115e6b3fcd37184cde4991b8b5e4c5b0->leave($__internal_3d35de6c39960979cb08d5aec918fcb4115e6b3fcd37184cde4991b8b5e4c5b0_prof);

        
        $__internal_0cf6d3acae164a015efa25922d94ef4a5ee96f33525e3fc9c2d75ac428838d90->leave($__internal_0cf6d3acae164a015efa25922d94ef4a5ee96f33525e3fc9c2d75ac428838d90_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af0152c8802f039b607ae8e7c88f73dd1877573c30532644f312a5692879ec95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0152c8802f039b607ae8e7c88f73dd1877573c30532644f312a5692879ec95->enter($__internal_af0152c8802f039b607ae8e7c88f73dd1877573c30532644f312a5692879ec95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df4c27b5e5b37d94267c50a8a8613f18d75c81bc337331a11fbedf4235c0f2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4c27b5e5b37d94267c50a8a8613f18d75c81bc337331a11fbedf4235c0f2cd->enter($__internal_df4c27b5e5b37d94267c50a8a8613f18d75c81bc337331a11fbedf4235c0f2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_df4c27b5e5b37d94267c50a8a8613f18d75c81bc337331a11fbedf4235c0f2cd->leave($__internal_df4c27b5e5b37d94267c50a8a8613f18d75c81bc337331a11fbedf4235c0f2cd_prof);

        
        $__internal_af0152c8802f039b607ae8e7c88f73dd1877573c30532644f312a5692879ec95->leave($__internal_af0152c8802f039b607ae8e7c88f73dd1877573c30532644f312a5692879ec95_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d8789b25cb6ed62020d51d55aa9965a45f119eaa41cca0e1af242e7928e9d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8789b25cb6ed62020d51d55aa9965a45f119eaa41cca0e1af242e7928e9d3f->enter($__internal_3d8789b25cb6ed62020d51d55aa9965a45f119eaa41cca0e1af242e7928e9d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c41f5584466d8e204a63dc2cc3e4ea74681d8a07546cb8ec65ca4deff997c789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41f5584466d8e204a63dc2cc3e4ea74681d8a07546cb8ec65ca4deff997c789->enter($__internal_c41f5584466d8e204a63dc2cc3e4ea74681d8a07546cb8ec65ca4deff997c789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c41f5584466d8e204a63dc2cc3e4ea74681d8a07546cb8ec65ca4deff997c789->leave($__internal_c41f5584466d8e204a63dc2cc3e4ea74681d8a07546cb8ec65ca4deff997c789_prof);

        
        $__internal_3d8789b25cb6ed62020d51d55aa9965a45f119eaa41cca0e1af242e7928e9d3f->leave($__internal_3d8789b25cb6ed62020d51d55aa9965a45f119eaa41cca0e1af242e7928e9d3f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a16cdbd0a35a93e4b9c5ab95d726f9c1555af1d3ca431d3d25becf88a54d667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a16cdbd0a35a93e4b9c5ab95d726f9c1555af1d3ca431d3d25becf88a54d667->enter($__internal_8a16cdbd0a35a93e4b9c5ab95d726f9c1555af1d3ca431d3d25becf88a54d667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a8d9f51855222d87c9173c685d356b250816b34f811ee7484641ac45e43c504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8d9f51855222d87c9173c685d356b250816b34f811ee7484641ac45e43c504->enter($__internal_7a8d9f51855222d87c9173c685d356b250816b34f811ee7484641ac45e43c504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7a8d9f51855222d87c9173c685d356b250816b34f811ee7484641ac45e43c504->leave($__internal_7a8d9f51855222d87c9173c685d356b250816b34f811ee7484641ac45e43c504_prof);

        
        $__internal_8a16cdbd0a35a93e4b9c5ab95d726f9c1555af1d3ca431d3d25becf88a54d667->leave($__internal_8a16cdbd0a35a93e4b9c5ab95d726f9c1555af1d3ca431d3d25becf88a54d667_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_014393f0a7423c4b1021c61e009d3def2362eb75a06af45b3ee8a7f19fb07665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014393f0a7423c4b1021c61e009d3def2362eb75a06af45b3ee8a7f19fb07665->enter($__internal_014393f0a7423c4b1021c61e009d3def2362eb75a06af45b3ee8a7f19fb07665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8b3092593560da2b2983e3715ee91b65fbb50966269e5d01bedda2c77fbc4f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3092593560da2b2983e3715ee91b65fbb50966269e5d01bedda2c77fbc4f08->enter($__internal_8b3092593560da2b2983e3715ee91b65fbb50966269e5d01bedda2c77fbc4f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8b3092593560da2b2983e3715ee91b65fbb50966269e5d01bedda2c77fbc4f08->leave($__internal_8b3092593560da2b2983e3715ee91b65fbb50966269e5d01bedda2c77fbc4f08_prof);

        
        $__internal_014393f0a7423c4b1021c61e009d3def2362eb75a06af45b3ee8a7f19fb07665->leave($__internal_014393f0a7423c4b1021c61e009d3def2362eb75a06af45b3ee8a7f19fb07665_prof);

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
", "base.html.twig", "/var/www/html/Ark_Project/app/Resources/views/base.html.twig");
    }
}
