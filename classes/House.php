<?php

require_once __DIR__ . '/../traits/address.php';


class House {
    use Address;

    public $name;
    public $description;
    public $mq;  


    public function __construct($name){
        $this->name = $name;
    }
    
    public function getHouseInfo(){
        return $this->name . ' ' . $this->description . ' ' . $this->mq;
    }
}