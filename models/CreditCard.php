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
}
