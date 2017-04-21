<?php

/* sites/dev.hv.devshop.odnodumci.com/themes/marketplace/templates/node--product--full.html.twig */
class __TwigTemplate_00d65ef609e24d3a76f35c31cdc478662001a34559857f0e5ee99509c557e39e extends Twig_Template
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
        $tags = array("set" => 63, "if" => 77, "trans" => 87);
        $filters = array("clean_class" => 65);
        $functions = array("attach_library" => 73);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 63
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 65
($context["node"] ?? null), "bundle", array()))), 2 => (($this->getAttribute(        // line 66
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 67
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 68
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 69
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 6 => "clearfix");
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true));
        echo "
<article";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <header>
    ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 77
        if ( !($context["page"] ?? null)) {
            // line 78
            echo "      <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
            echo ">
        <a href=\"";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
      </h2>
    ";
        }
        // line 82
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
    ";
        // line 83
        if (($context["display_submitted"] ?? null)) {
            // line 84
            echo "      <div class=\"node__meta\">
        ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
        <span";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true));
            echo ">
          ";
            // line 87
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 88
            echo "        </span>
        ";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 92
        echo "  </header>
  <div";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
        echo ">
    <div class=\"product-summary-info\">
      ";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_images", array()), "html", null, true));
        echo "
      <div class=\"group-info\">
        <h1>
          <span>";
        // line 98
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["node_title"] ?? null), "html", null, true));
        echo "</span>
        </h1>
        <div class=\"field-product-brand\">
          ";
        // line 101
        echo t("<span>by </span>", array());
        // line 102
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_brands", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_old_price", array()), "html", null, true));
        echo "
        ";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_discount_percentage", array()), "html", null, true));
        echo "
        ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_price", array()), "html", null, true));
        echo "
        <div class=\"field field-type-commerce-product-reference\">
          <form action=\"\" class=\"commerce-add-to-cart\">
            <div class=\"form-item form-type-textfield form-item-quantity add-quantity-button\">
              <span class=\"btn decrease\" id=\"quantity-decrease\"></span>
              <label for=\"edit-quantity\">Quantity </label>
              <input type=\"text\" id=\"edit-quantity\" name=\"quantity\" value=\"1\" size=\"5\" maxlength=\"128\" class=\"form-text\">
              <span class=\"btn increase\" id=\"quantity-increase\"></span>
            </div>
            <input id=\"add-to-cart\" name=\"op\" value=\"Add to cart\" class=\"form-submit\" type=\"submit\">
          </form>
        </div>
        ";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_stores", array()), "html", null, true));
        echo "
        ";
        // line 119
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_short_description", array()), "html", null, true));
        echo "
      </div>
    </div>
    ";
        // line 122
        echo t("<div class=\"product-detail-tabs\">
      <a id=\"hover-product-detail\" href=\"#product-detail\">Product Details</a>
      <a id=\"hover-production-specifications\" href=\"#production-specifications\">Production Specifications</a>
      <a id=\"hover-comments\" href=\"#comments-region\">Reviews</a>
    </div>", array());
        // line 129
        echo "    <div class=\"product-deteil-info\">
      <div id=\"product-detail\" class=\"group-product-detail\">
        ";
        // line 131
        echo t("<h3>Product Detail</h3>", array());
        // line 132
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "body", array()), "html", null, true));
        echo "
      </div>
      <div id=\"production-specifications\" class=\"group-product-specifications\">
        ";
        // line 135
        echo t("<h3>Specifications</h3>", array());
        // line 136
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_specifications", array()), "html", null, true));
        echo "
      </div>
      <div id=\"comments-region\" class=\"group-product-comments\">
        ";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", array()), "html", null, true));
        echo "
        ";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "sites/dev.hv.devshop.odnodumci.com/themes/marketplace/templates/node--product--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 140,  196 => 139,  189 => 136,  187 => 135,  180 => 132,  178 => 131,  174 => 129,  168 => 122,  162 => 119,  158 => 118,  143 => 106,  139 => 105,  135 => 104,  129 => 102,  127 => 101,  121 => 98,  115 => 95,  110 => 93,  107 => 92,  101 => 89,  98 => 88,  96 => 87,  92 => 86,  88 => 85,  85 => 84,  83 => 83,  78 => 82,  70 => 79,  65 => 78,  63 => 77,  59 => 76,  54 => 74,  50 => 73,  48 => 69,  47 => 68,  46 => 67,  45 => 66,  44 => 65,  43 => 63,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sites/dev.hv.devshop.odnodumci.com/themes/marketplace/templates/node--product--full.html.twig", "/var/aegir/projects/hv/dev/sites/dev.hv.devshop.odnodumci.com/themes/marketplace/templates/node--product--full.html.twig");
    }
}
