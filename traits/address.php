<?php

trait Address {
    public $address;
    public $municipality;
    public $province;
    public $postalCode;
    public $nation;

    public function getFullAddress(){
        return $this->address . ' ' . $this->municipality . ' ' .$this->province . ' ' .$this->postalCode . ' ' . $this->nation;
    }
}