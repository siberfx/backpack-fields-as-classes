<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class DatePickerField extends Field
{ 

    protected $result = ['type' => 'date_picker']; 

    public function name(string $value): DatePickerField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): DatePickerField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function date_picker_options(array $value): DatePickerField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('date_picker_options', $value);
        return $this;
    }
    
    
    public function todayBtn(string $value): DatePickerField
    {
        $this->offsetSet('todayBtn', $value);
        return $this;
    }
    
    
    public function format(string $value): DatePickerField
    {
        $this->offsetSet('format', $value);
        return $this;
    }
    
    
    public function language(string $value): DatePickerField
    {
        $this->offsetSet('language', $value);
        return $this;
    }
    
    
}