<?php 
include_once __DIR__ . '/Product.php';

class Jacket extends Product {
    // properties
    public $type;
    public $material;

    // constructor
    public function __construct($_name, $_description, $_price, $_type, $_material) {
        parent::__construct($_name, $_description, $_price);
        $this->type = $_type;
        $this->material = $_material;
    }
}
