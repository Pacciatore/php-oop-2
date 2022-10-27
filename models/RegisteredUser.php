<?php
require_once __DIR__ . './User.php';

class RegisteredUser extends User
{
    public $name;
    public $surname;
    public $password;
    public $profileImage;
}
