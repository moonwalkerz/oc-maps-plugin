<?php namespace MoonWalkerz\Map;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	 return [
            'MoonWalkerz\Map\Components\Map'  => 'map',
             'MoonWalkerz\Map\Components\GoogleMap'  => 'googlemap'
        ];
    }

    public function registerSettings()
    {
    }
}
