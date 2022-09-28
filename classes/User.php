<?php
 
 require_once __DIR__ . '/../traits/address.php';

class User {
    use Address;

    public $name;
    public $surname;
    public $email;
    public $phone;

    public function __construct($name, $surname, $email, $phone){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getUserInfo(){
        return $this->name . ' ' .$this->surname . ' ' .$this->email . ' ' .$this->phone;
    }
}