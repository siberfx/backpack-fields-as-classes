<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class DatetimeColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#datetime Documentation
 * 
* <a name="datetime"></a>
* 
* 
* The date column will show a localized datetime in the default datetime format (as specified in the ```config/backpack/base.php``` file), whether the attribute is casted as datetime in the model or not:
* 
* ```php
 */
class DatetimeColumn extends Column
{ 

    protected $result = ['type' => 'datetime']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DatetimeColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): DatetimeColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): DatetimeColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function format(string $value): DatetimeColumn
    {
        $this->offsetSet('format', $value);
        return $this;
    }
    
    
}