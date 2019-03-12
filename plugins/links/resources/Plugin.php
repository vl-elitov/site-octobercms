<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Email: anufrievv.vvladimir@gmail.com
 * Date: 3/11/19
 * Time: 5:51 PM
 */

namespace Links\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'List links',
            'description' => 'The simplest plugin with one component',
            'author' => 'Vladimir Anufriev'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Links\Resources\Components\Links' => 'resourcesLinks'
        ];
    }
}