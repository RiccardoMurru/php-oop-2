<?php

class Product
{
    // properties
    public $name;
    public $description;
    public $price;

    // constructor
    public function __construct($_name, $_description, $_price)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
    }

    public function calcDiscount($_percent)
    {
        return $this->price * (1 - ($_percent / 100));
    }
}
