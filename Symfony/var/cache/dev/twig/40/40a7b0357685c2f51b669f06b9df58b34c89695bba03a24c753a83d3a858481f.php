<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_17eb9f0d8f636ecff8ffcae2ef148a6c8d8a1d9f4a78b564f689565a87c7d9fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ab5da9e73cb85bebe93bcd823188bdbc1a3d69c281333e976046eb778cc6108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab5da9e73cb85bebe93bcd823188bdbc1a3d69c281333e976046eb778cc6108->enter($__internal_9ab5da9e73cb85bebe93bcd823188bdbc1a3d69c281333e976046eb778cc6108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_6f97d5f5db80c0bfc1be4d254e2b3e2010a8989b5974fbbd46a4411e45fa4c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f97d5f5db80c0bfc1be4d254e2b3e2010a8989b5974fbbd46a4411e45fa4c4b->enter($__internal_6f97d5f5db80c0bfc1be4d254e2b3e2010a8989b5974fbbd46a4411e45fa4c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9ab5da9e73cb85bebe93bcd823188bdbc1a3d69c281333e976046eb778cc6108->leave($__internal_9ab5da9e73cb85bebe93bcd823188bdbc1a3d69c281333e976046eb778cc6108_prof);

        
        $__internal_6f97d5f5db80c0bfc1be4d254e2b3e2010a8989b5974fbbd46a4411e45fa4c4b->leave($__internal_6f97d5f5db80c0bfc1be4d254e2b3e2010a8989b5974fbbd46a4411e45fa4c4b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
