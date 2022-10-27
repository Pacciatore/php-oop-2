<?php
require_once __DIR__ . './User.php';

class RegisteredUser extends User
{
    public $name;
    public $surname;
    public $password;
    public $profileImage;

    public function checkOut()
    {
        $totalCartPrice = parent::checkOut();
        return [
            "total" => $totalCartPrice['total'] * 0.8,
            "vat" => $totalCartPrice['vat'] * 0.8,
            "granTotal" => ($totalCartPrice['total'] + $totalCartPrice['vat']) * 0.8,
        ];
    }
}
