<?php 
class Address{
    public $street;
    public $city;
    public $postCode;
    public $state;
    public $country;
    public static $year = 2024;

    public function __construct($_street, $_city, $_postCode, $_state, $_country){
        $this->street = $_street;
        $this->city = $_city;
        $this->postCode = $_postCode;
        $this->state = $_state;
        $this->country = $_country;
    }

    public function getYear(){
        // self::dump("ciao");
        return self::$year;
    }

    public static function dump($value){
        return $value;
    }
}
