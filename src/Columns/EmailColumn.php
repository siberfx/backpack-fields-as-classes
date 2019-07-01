<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class EmailColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#email Documentation
 */
class EmailColumn extends Column
{ 

    protected $result = ['type' => 'email']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : EmailColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): EmailColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): EmailColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function limit($value): EmailColumn
    {
        $this->offsetSet('limit', $value);
        return $this;
    }
    
    
}