<?php
/**
 * Huebee plugin for Craft CMS
 *
 * Huebee Model
 *
 * @author    @cole007
 * @copyright Copyright (c) 2017 @cole007
 * @link      http://ournameismud.co.uk/
 * @package   Huebee
 * @since     1.0.0
 */

namespace Craft;

class HuebeeModel extends BaseModel
{
    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), array(
            'huebee'     => array(AttributeType::String, 'default' => ''),
        ));
    }

}