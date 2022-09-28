<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Sell.php';
require_once __DIR__ . '/Rent.php';

$myCustomer = new Customer("Nanni", "Moretti", "bianca@caro.diario", '123456789');
$houseForSell = new Sell ("monolocale fighissimo zio!", $myCustomer, 450);
$houseForRent = new House ('Trilocale in periferia', $myCustomer, 550);

$myCustomer->address = 'Via Breda, 25';
$myCustomer->municipality = 'Padova';
$myCustomer->province = 'PD';
$myCustomer->postalCode = '35123';
$myCustomer->nation = 'Italy';
echo $myCustomer->getFullAddress;