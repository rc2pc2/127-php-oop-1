<?php 
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Address.php';

// ! Creazione di una nuova istanza di classe User
$address = new Address("via milano 11", "Napoli", "02122", "Campania", "Italy");
$user = new User("ginetto", "ginetto@gmail.com", $address ); 
// $user->username = "ginetto";
// $user->email = "ginetto@gmail.com";

$useressa = new User("geena", "geenawonders@email.com", new Address("via genova 11", "Palermo", "90100", "Sicilia", "Italy")); 
// $useressa->username = "Geena";
// $useressa->email = "geenawonderful@email.com";

// var_dump($user, $useressa);
// echo Address::$year;
// echo $address->getYear();

Address::dump("CIAONE!");