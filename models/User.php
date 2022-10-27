<?php

class User
{
    public $email;
    public $address = '';

    public $cart = [];

    public function addProduct($product)
    {
        $this->cart[] = $product;
    }

    public function checkOut()
    {
        $totalPrice = 0;
        $totalVat = 0;

        foreach ($this->products as $product) {
            $totalPrice += $product->price;
            $totalVat += ($totalPrice * $product->vat / 100);
        }

        return [
            "total" => $totalPrice,
            "vat" => $totalVat,
            "granTotal" => $totalPrice + $totalVat
        ];
    }
}
