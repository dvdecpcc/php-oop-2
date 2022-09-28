<?php

require_once __DIR__ . '/House.php';

class Rent extends House {
    public $monthRent;
    public $contractType;

    public function __construct($name);
    $this->monthlyRent = $monthlyRent;
}