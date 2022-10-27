<?php
require_once __DIR__ . './CreditCard.php';

class User
{
    public $email;
    public $address = '';

    public $creditCard;

    public $cart = [];

    public function addCreditCard($_number, $_expiryDate, $_owner, $_cvv)
    {
        $this->creditCard = new CreditCard($_number, $_expiryDate, $_owner, $_cvv);
    }

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

    public function pay()
    {
        if ($this->creditCard->isValid()) {
            $price = $this->checkOut();
            if ($this->creditCard->proceedPayment($price['granTotal'])) {
                $this->cart = [];
                // inviamo una mail con ricevuta/fattura
            };
        }
    }
}
