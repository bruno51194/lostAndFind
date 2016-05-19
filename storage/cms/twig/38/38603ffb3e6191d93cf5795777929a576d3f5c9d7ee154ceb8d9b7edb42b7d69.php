<?php

/* C:\xampp\htdocs\PekiApp/themes/demo/pages/ajax.htm */
class __TwigTemplate_90a3c8c7a49790ed48725a7d9d1f3ac7d4261bbd858884c26cb858656378fdee extends Twig_Template
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
        echo "<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>AJAX framework</h1>
                <p>This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Calculator</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                <input type=\"text\" class=\"form-control\" value=\"15\" name=\"value1\" style=\"width:100px\">
                <select class=\"form-control\" name=\"operation\" style=\"width: 70px\">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <input type=\"text\" class=\"form-control\" value=\"5\" name=\"value2\" style=\"width:100px\">
                <button type=\"submit\" class=\"btn btn btn-primary\">Calculate</button>
            </form>
        </div>
        <div class=\"panel-footer\" id=\"result\">
            ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("calcresult"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "        </div>
    </div>

</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("explain/ajax.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "</div>

<br />

<div class=\"text-center\">
    <p><a href=\"";
        // line 44
        echo $this->env->getExtension('CMS')->pageFilter("plugins");
        echo "\" class=\"btn btn-lg btn-default\">Continue to Plugin components</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PekiApp/themes/demo/pages/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 44,  64 => 39,  56 => 33,  52 => 32,  19 => 1,);
    }
}
/* <div class="jumbotron title-js">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-8">*/
/*                 <h1>AJAX framework</h1>*/
/*                 <p>This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">Calculator</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form class="form-inline" data-request="onTest" data-request-update="calcresult: '#result'">*/
/*                 <input type="text" class="form-control" value="15" name="value1" style="width:100px">*/
/*                 <select class="form-control" name="operation" style="width: 70px">*/
/*                     <option>+</option>*/
/*                     <option>-</option>*/
/*                     <option>*</option>*/
/*                     <option>/</option>*/
/*                 </select>*/
/*                 <input type="text" class="form-control" value="5" name="value2" style="width:100px">*/
/*                 <button type="submit" class="btn btn btn-primary">Calculate</button>*/
/*             </form>*/
/*         </div>*/
/*         <div class="panel-footer" id="result">*/
/*             {% partial "calcresult" %}*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <!-- Page Explanation -->*/
/* <div class="container">{% partial "explain/ajax.htm" %}</div>*/
/* */
/* <br />*/
/* */
/* <div class="text-center">*/
/*     <p><a href="{{ 'plugins'|page }}" class="btn btn-lg btn-default">Continue to Plugin components</a></p>*/
/* </div>*/
