<?php
    require_once __DIR__ . '/house.php';
    class Rent extends House{
        public $monthlyRent;
        public $contract;

        public function __construct($name, $monthlyRent){
            parent::__construct($name);
            $this->monthlyRent = $monthlyRent;
        }
    }