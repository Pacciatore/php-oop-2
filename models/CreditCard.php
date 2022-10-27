<?php

class CreditCard
{
    public $number;
    public $owner;
    public $expireDate;
    public $cvv;

    function __construct($_number, $_expiryDate, $_owner, $_cvv)
    {
        $this->number = $_number;
        $this->expiryDate = $_expiryDate;
        $this->owner = $_owner;
        $this->cvv = $_cvv;
    }

    public function isValid()
    {
        // Check su data di scadenza
        return true;
    }

    public function proceedPayment($price)
    {
        $success = true;

        try {
            // interrogo un'API di transazioni monetarie per $price
        } catch (Exception $e) {
            // è andata male
            $success = false;
        }

        return $success;
    }
}
