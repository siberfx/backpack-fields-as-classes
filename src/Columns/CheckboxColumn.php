<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class CheckboxColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#checkbox Documentation
 */
class CheckboxColumn extends Column
{ 

    protected $result = ['type' => 'checkbox']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : CheckboxColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): CheckboxColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): CheckboxColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function priority($value): CheckboxColumn
    {
        $this->offsetSet('priority', $value);
        return $this;
    }
    
    
    public function searchLogic(bool $value = true): CheckboxColumn
    {
        $this->offsetSet('searchLogic', $value);
        return $this;
    }
    
    
    public function orderable(bool $value = true): CheckboxColumn
    {
        $this->offsetSet('orderable', $value);
        return $this;
    }
    
    
    public function visibleInModal(bool $value = true): CheckboxColumn
    {
        $this->offsetSet('visibleInModal', $value);
        return $this;
    }
    
    
}