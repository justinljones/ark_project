<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2368b10b0c47bb8d19f89715409434d1f35704c68a00a868bdfb8f43beda3b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2368b10b0c47bb8d19f89715409434d1f35704c68a00a868bdfb8f43beda3b62->enter($__internal_2368b10b0c47bb8d19f89715409434d1f35704c68a00a868bdfb8f43beda3b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_866ee1f18bbb4ceb54bd41e551bf472a0bace593bfa0eb7b83010c50e9c50309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866ee1f18bbb4ceb54bd41e551bf472a0bace593bfa0eb7b83010c50e9c50309->enter($__internal_866ee1f18bbb4ceb54bd41e551bf472a0bace593bfa0eb7b83010c50e9c50309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2368b10b0c47bb8d19f89715409434d1f35704c68a00a868bdfb8f43beda3b62->leave($__internal_2368b10b0c47bb8d19f89715409434d1f35704c68a00a868bdfb8f43beda3b62_prof);

        
        $__internal_866ee1f18bbb4ceb54bd41e551bf472a0bace593bfa0eb7b83010c50e9c50309->leave($__internal_866ee1f18bbb4ceb54bd41e551bf472a0bace593bfa0eb7b83010c50e9c50309_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c06c737c315bfdc08488e221940f97c4b56343668490717ad821bb76215af69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06c737c315bfdc08488e221940f97c4b56343668490717ad821bb76215af69e->enter($__internal_c06c737c315bfdc08488e221940f97c4b56343668490717ad821bb76215af69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71da8fbfc4dfd130b13d86e3520a342714c636cdd5dcb7fd5eb353362da3ce6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71da8fbfc4dfd130b13d86e3520a342714c636cdd5dcb7fd5eb353362da3ce6b->enter($__internal_71da8fbfc4dfd130b13d86e3520a342714c636cdd5dcb7fd5eb353362da3ce6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_71da8fbfc4dfd130b13d86e3520a342714c636cdd5dcb7fd5eb353362da3ce6b->leave($__internal_71da8fbfc4dfd130b13d86e3520a342714c636cdd5dcb7fd5eb353362da3ce6b_prof);

        
        $__internal_c06c737c315bfdc08488e221940f97c4b56343668490717ad821bb76215af69e->leave($__internal_c06c737c315bfdc08488e221940f97c4b56343668490717ad821bb76215af69e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_590ea9d16868b93e83776ac643ea71967563f7328f54af75c51ded6a231e7ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590ea9d16868b93e83776ac643ea71967563f7328f54af75c51ded6a231e7ced->enter($__internal_590ea9d16868b93e83776ac643ea71967563f7328f54af75c51ded6a231e7ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f1c58f55f9e13f29450f3b92ab999c439688d334e95f6fda96216d4fa4bfa0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c58f55f9e13f29450f3b92ab999c439688d334e95f6fda96216d4fa4bfa0a7->enter($__internal_f1c58f55f9e13f29450f3b92ab999c439688d334e95f6fda96216d4fa4bfa0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f1c58f55f9e13f29450f3b92ab999c439688d334e95f6fda96216d4fa4bfa0a7->leave($__internal_f1c58f55f9e13f29450f3b92ab999c439688d334e95f6fda96216d4fa4bfa0a7_prof);

        
        $__internal_590ea9d16868b93e83776ac643ea71967563f7328f54af75c51ded6a231e7ced->leave($__internal_590ea9d16868b93e83776ac643ea71967563f7328f54af75c51ded6a231e7ced_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d16d274ef99ae1fc0bd60fc902df4b8bf514242f62ab927edaf023418fbc263d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16d274ef99ae1fc0bd60fc902df4b8bf514242f62ab927edaf023418fbc263d->enter($__internal_d16d274ef99ae1fc0bd60fc902df4b8bf514242f62ab927edaf023418fbc263d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c313565b178dac93fa0ebdc940582b34c1f2e0c0bcec48323b6b048532802962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c313565b178dac93fa0ebdc940582b34c1f2e0c0bcec48323b6b048532802962->enter($__internal_c313565b178dac93fa0ebdc940582b34c1f2e0c0bcec48323b6b048532802962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c313565b178dac93fa0ebdc940582b34c1f2e0c0bcec48323b6b048532802962->leave($__internal_c313565b178dac93fa0ebdc940582b34c1f2e0c0bcec48323b6b048532802962_prof);

        
        $__internal_d16d274ef99ae1fc0bd60fc902df4b8bf514242f62ab927edaf023418fbc263d->leave($__internal_d16d274ef99ae1fc0bd60fc902df4b8bf514242f62ab927edaf023418fbc263d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Ark_Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
