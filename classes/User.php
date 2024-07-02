<?php 
require_once __DIR__ . '/Address.php';

class User{
    // # ambito di visibilita'  +  nome della variabile di istanza
    public $username;
    public $email;
    public $address; // di tipo Address

    public function __construct( $_username, $_email, Address $_address ){
        $this->username = $_username;
        $this->email = $_email;
        $this->address = $_address;
    }

    public function getUsername(){
        return $this->username;
    }
}