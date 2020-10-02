<?php namespace MartiniMultimedia\Map;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	 return [
            'MartiniMultimedia\Map\Components\Map'  => 'map',
             'MartiniMultimedia\Map\Components\GoogleMap'  => 'googlemap'
        ];
    }
    public function registerPageSnippets()
    {
        return [
            'MartiniMultimedia\Map\Components\Map'  => 'map',
             'MartiniMultimedia\Map\Components\GoogleMap'  => 'googlemap'
        ];
    }
    public function registerSettings()
    {
    }
}
