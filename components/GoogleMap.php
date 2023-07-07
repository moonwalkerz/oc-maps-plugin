<?php namespace MoonWalkerz\Maps\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Exception;

use Debugbar;

class  GoogleMap extends ComponentBase
{

    public $lat="45.000";
    public $lon="7.000";
    public $zoom="13";
    public $height="550px";
     public $mark="mark.png";
      public $shadow="mark-shadow.png";

    public function componentDetails()
    {
        return [
            'name'        => 'GoogleMap',
            'description' => 'Insert a googlemap on page'
        ];
    }

    public function defineProperties()
    {

        return [
            'lat' => [
                'title'       => 'Latitude',
                'description' => 'Latitude',
                'type'        => 'string',
                'default'     => '45.000'
            ],
            'lon' => [
                'title'       => 'Longitude',
                'description' => 'Longitude',
                'type'        => 'string',
                'default'     => '7.000'
            ],
            'zoom' => [
                'title'       => 'Zoom',
                'description' => 'Zoom Level',
                'type'        => 'string',
                'default'     => '13'
            ],
             'height' => [
                'title'       => 'Height',
                'description' => 'Map Height',
                'type'        => 'string',
                'default'     => '550px'
            ]
            ,
             'mark' => [
                'title'       => 'Marker',
                'description' => 'Marker icon (30x50px)',
                'type'        => 'string',
                'default'     => 'mark.png'
            ]
            ,
             'shadow' => [
                'title'       => 'Marker shadow',
                'description' => 'Marker shadow (40x50px)',
                'type'        => 'string',
                'default'     => 'mark-shadow.png'
            ]
            ,
             'apikey' => [
                'title'       => 'API Key',
                'description' => 'Google Maps API Key',
                'type'        => 'string',
                'default'     => ''
            ]
        ];
    }

    /**
     * Executed when this component is bound to a page or layout.
     */
    public function onRun()
    {
     
    }

    public function onRender()
    {  
        $this->prepareVars();
    }

    public function prepareVars()
    {
      
        $this->height =$this->page['height']= $this->property('height');
        $this->lat =$this->page['lat']= $this->property('lat');
        $this->lon =$this->page['lon']= $this->property('lon');
        $this->zoom =$this->page['zoom']= $this->property('zoom');
         $this->mark =$this->page['mark']= $this->property('mark');
          $this->shadow =$this->page['shadow']= $this->property('shadow');
           $this->apikey =$this->page['apikey']= $this->property('apikey');

    }

}
