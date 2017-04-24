<?php
/**
 * Huebee plugin for Craft CMS
 *
 * Huebee colour picker integration
 *
 * @author    @cole007
 * @copyright Copyright (c) 2017 @cole007
 * @link      http://ournameismud.co.uk/
 * @package   Huebee
 * @since     1.0.0
 */

namespace Craft;

class HuebeePlugin extends BasePlugin
{
    public function init()
    {
        parent::init();
    }

    public function getName()
    {
         return Craft::t('Huebee');
    }

    public function getDescription()
    {
        return Craft::t('Huebee colour picker integration');
    }

    public function getDocumentationUrl()
    {
        return '???';
    }

    public function getReleaseFeedUrl()
    {
        return '???';
    }

    public function getVersion()
    {
        return '1.0.0';
    }    

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return '@cole007';
    }

    public function getDeveloperUrl()
    {
        return 'http://ournameismud.co.uk/';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function onBeforeInstall()
    {
    }

    public function onAfterInstall()
    {
    }

    public function onBeforeUninstall()
    {
    }

    public function onAfterUninstall()
    {
    }
}