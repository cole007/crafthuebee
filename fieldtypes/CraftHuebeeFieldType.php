<?php
/**
 * Craft Huebee plugin for Craft CMS
 *
 * CraftHuebee FieldType
 *
 * @author    @cole007
 * @copyright Copyright (c) 2017 @cole007
 * @link      http://ournameismud.co.uk/
 * @package   CraftHuebee
 * @since     1.0.0
 */

namespace Craft;

class CraftHuebeeFieldType extends BaseFieldType
{
    public function getName()
    {
        return Craft::t('Craft Huebee');
    }

    public function defineContentAttribute()
    {
        return AttributeType::Mixed;
    }

    public function getInputHtml($name, $value)
    {
        $id = craft()->templates->formatInputId($name);
        $namespacedId = craft()->templates->namespaceInputId($id);

        if (empty($value))
        {
            $value = $this->getSettings()->defaultColor;
        }
		
		/* -- Include our Javascript & CSS */

        craft()->templates->includeCssResource('crafthuebee/css/fields/huebee.min.css');
        craft()->templates->includeCss('.huebee { z-index: 100; } #container { overflow-y: visible; }');
        craft()->templates->includeJsResource('crafthuebee/js/fields/huebee.pkgd.min.js');

        $plugin = craft()->plugins->getPlugin('crafthuebee');
        $settings = $plugin->getSettings();
        $palette = '\'' . implode('\',\'',$settings['palette']) . '\'';
        craft()->templates->includeJs("$('.color-input').each( function( i, elem ) { var hueb = new Huebee( elem, { customColors: [".$palette."]} ); })");

		/* -- Variables to pass down to our rendered template */

        $variables = array(
            'id' => $id,
            'name' => $name,
            'namespaceId' => $namespacedId,
            'value' => $value,
            'default' => $this->getSettings()->defaultColor,
            );

        return craft()->templates->render('crafthuebee/fields/index', $variables);

    }


    protected function defineSettings()
    {
        return array(
            'defaultColor' => AttributeType::Mixed,
        );
    }
    
    public function getSettingsHtml()
    {
        craft()->templates->includeCssResource('crafthuebee/css/fields/huebee.min.css');
        craft()->templates->includeCss('.huebee { z-index: 100; } #container { overflow-y: visible; }');
        craft()->templates->includeJsResource('crafthuebee/js/fields/huebee.pkgd.min.js');
        craft()->templates->includeJs("$('.color-input').each( function( i, elem ) { var hueb = new Huebee( elem ); })");
        return craft()->templates->render('crafthuebee/fields/settings', array(
            'settings' => $this->getSettings()
        ));
    }

    public function prepValueFromPost($value)
    {
        return $value;
    }

    public function prepValue($value)
    {
        return $value;
    }
}