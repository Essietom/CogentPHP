<?php

/* index.html */
class __TwigTemplate_4c7a89dce3741db92ad84d73dbeeb55723fca226e47c2497e9073d94bbe0018b extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>twig</title>
</head>
<body>
    <h1>Hi ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!</h1>
    <h3> I am a ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
        echo "</h3>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>twig</title>*/
/* </head>*/
/* <body>*/
/*     <h1>Hi {{ name }}!</h1>*/
/*     <h3> I am a {{ position }}</h3>*/
/* </body>*/
/* </html>*/
/* */
