<?php

require_once __DIR__ . '/user.php';

class Customer extends User{
    public $customerNeeds = null;

    public function __construct($name, $surname, $email, $phone, $customerNeeds = null){
        parent::__construct($name, $surname, $email, $phone);
        $this->customerNeeds = $customerNeeds;
    }
}