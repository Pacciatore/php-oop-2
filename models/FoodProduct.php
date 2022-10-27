<?php
require_once __DIR__ . './Product.php';

class FoodProduct extends Product
{
    public $category = 'Food';
    public $expire_date = '';

    public $type = 'umido'; //umido o secco
    public $weight = 0;

    public $ingredients = [];
    public $petWeightCategory = 0;
}
