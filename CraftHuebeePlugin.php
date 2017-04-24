<?php
/**
 * Craft Huebee plugin for Craft CMS
 *
 * Huebee colour picker fieldtype for Craft
 *
 * @author    @cole007
 * @copyright Copyright (c) 2017 @cole007
 * @link      http://ournameismud.co.uk/
 * @package   CraftHuebee
 * @since     1.0.0
 */

namespace Craft;

class CraftHuebeePlugin extends BasePlugin
{
    public function init()
        {
            parent::init();
        }

        public function getName()
        {
             return Craft::t('Craft Huebee');
        }

        public function getDescription()
        {
            return Craft::t('Huebee colour picker fieldtype for Craft');
        }

        public function getDocumentationUrl()
        {
            return 'https://github.com/cole007/crafthuebee/blob/master/README.md';
        }

        public function getReleaseFeedUrl()
        {
            return 'https://raw.githubusercontent.com/cole007/crafthuebee/master/releases.json';
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