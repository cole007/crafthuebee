<?php
/**
 * Huebee plugin for Craft CMS
 *
 * Huebee FieldType
 *
 * --snip--
 * Whenever someone creates a new field in Craft, they must specify what type of field it is. The system comes with
 * a handful of field types baked in, and we’ve made it extremely easy for plugins to add new ones.
 *
 * https://craftcms.com/docs/plugins/field-types
 * --snip--
 *
 * @author    @cole007
 * @copyright Copyright (c) 2017 @cole007
 * @link      http://ournameismud.co.uk/
 * @package   Huebee
 * @since     1.0.0
 */

namespace Craft;

class HuebeeFieldType extends BaseFieldType
{
    /**
     * Returns the name of the fieldtype.
     *
     * @return mixed
     */
    public function getName()
    {
        return Craft::t('Huebee');
    }

    /**
     * Returns the content attribute config.
     *
     * @return mixed
     */
    public function defineContentAttribute()
    {
        return AttributeType::Mixed;
    }

    /**
     * Returns the field's input HTML.
     *
     * @param string $name
     * @param mixed  $value
     * @return string
     */
    public function getInputHtml($name, $value)
    {
        if (!$value)
            $value = new HuebeeModel();

        $id = craft()->templates->formatInputId($name);
        $namespacedId = craft()->templates->namespaceInputId($id);

/* -- Include our Javascript & CSS */

        craft()->templates->includeCssResource('huebee/css/fields/huebee.min.css');
        craft()->templates->includeCss('.huebee { z-index: 100; } #container { overflow-y: visible; }');
        // craft()->templates->includeJsResource('huebee/js/fields/HuebeeFieldType.js');
        craft()->templates->includeJsResource('huebee/js/fields/huebee.pkgd.min.js');
        craft()->templates->includeJs("$('.color-input').each( function( i, elem ) { var hueb = new Huebee( elem ); })");

/* -- Variables to pass down to our field.js */

        // $jsonVars = array(
        //     'id' => $id,
        //     'name' => $name,
        //     'namespace' => $namespacedId,
        //     'prefix' => craft()->templates->namespaceInputId(""),
        //     );

        // $jsonVars = json_encode($jsonVars);
        // craft()->templates->includeJs("$('#{$namespacedId}-field').HuebeeFieldType(" . $jsonVars . ");");

/* -- Variables to pass down to our rendered template */

        $variables = array(
            'id' => $id,
            'name' => $name,
            'namespaceId' => $namespacedId,
            'values' => $value
            );

        return craft()->templates->render('huebee/fields/HuebeeFieldType.twig', $variables);
    }

    /**
     * Returns the input value as it should be saved to the database.
     *
     * @param mixed $value
     * @return mixed
     */
    public function prepValueFromPost($value)
    {
        return $value;
    }

    /**
     * Prepares the field's value for use.
     *
     * @param mixed $value
     * @return mixed
     */
    public function prepValue($value)
    {
        return $value;
    }
}