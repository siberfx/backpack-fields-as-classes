<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class VideoField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#video Documentation
 */
class VideoField extends Field
{ 

    protected $result = ['type' => 'video']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : VideoField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): VideoField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): VideoField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}