<?php
include_once __DIR__ . '/Product.php';

// classe figlia di Product
class Shirt extends Product
{
    // properties
    public $brand;
    public $size;
    public $color;

    // constructor
    public function __construct($_name, $_description, $_price, $_brand, $_size, $_color)
    {
        parent::__construct($_name, $_description, $_price);
        $this->brand = $_brand;
        $this->size = $_size;
        $this->color = $_color;
    }
}
