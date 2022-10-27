<?php

class Product
{

    public $brand;
    public $name;
    public $description = '';
    public $category = '';

    public $price = 0;
    public $vat = 22;

    function __construct($_brand, $_name, $_price)
    {
        $this->brand = $_brand;
        $this->name = $_name;
        $this->price = $_price;
    }
}
