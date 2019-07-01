<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{RadioField};

/**
 * Class RadioFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class RadioFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields) : RadioFields
    {
        return new self($fields, RadioField::class);
    }
    
    public function name(string $value): RadioFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): RadioFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function options(array $value): RadioFields
    {
        foreach ($this->result as $f) {
            $f->options($value);
        }
        return $this;
    }
    
    
    public function 0(string $value): RadioFields
    {
        foreach ($this->result as $f) {
            $f->0($value);
        }
        return $this;
    }
    
    
    public function 1(string $value): RadioFields
    {
        foreach ($this->result as $f) {
            $f->1($value);
        }
        return $this;
    }
    
    
    public function inline(bool $value = true): RadioFields
    {
        foreach ($this->result as $f) {
            $f->inline($value);
        }
        return $this;
    }
    
    
}