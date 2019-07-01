<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class BrowseMultipleField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#browse_multiple Documentation
 */
class BrowseMultipleField extends Field
{ 

    protected $result = ['type' => 'browse_multiple']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : BrowseMultipleField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): BrowseMultipleField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): BrowseMultipleField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function multiple(bool $value = true): BrowseMultipleField
    {
        $this->offsetSet('multiple', $value);
        return $this;
    }
    
    
    public function mime_types(array $value): BrowseMultipleField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('mime_types', $value);
        return $this;
    }
    
    
}