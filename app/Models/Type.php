<?php

class Type extends CoreModel

{

    public static $table = "type";

   
    protected $name;
    protected $color;


    public function getName()               { return $this->name; }
    public function getColor()              { return $this->color; }

}