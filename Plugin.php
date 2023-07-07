<?php namespace MoonWalkerz\Maps;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	 return [
            'MoonWalkerz\Maps\Components\Map'  => 'map',
             'MoonWalkerz\Maps\Components\GoogleMap'  => 'googlemap'
        ];
    }

    public function registerSettings()
    {
    }
}
