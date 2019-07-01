<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class TextareaField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#textarea Documentation
 * 
* You can use the optional 'prefix' and 'suffix' attributes to display something before and after the input, like icons, path prefix, etc:
* 
* Input preview: 
* 
* ![CRUD Field - text](https://backpackforlaravel.com/uploads/docs-3-5/fields/text.png)
* 
* <a name="textarea"></a>
* 
* Show a textarea to the user.
* 
* ```php
 */
class TextareaField extends Field
{ 

    protected $result = ['type' => 'textarea']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TextareaField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): TextareaField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TextareaField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}