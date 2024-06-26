<?php

require_once('User.php');

class Client extends User {
    private string $city;
    private string $state;
    private string $country;

    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
    }

    public function setCity(string $city) {
        $this->city = $city;
    }

    public function getCity() {
        return $this->city;
    }

    public function setState(string $state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

    public function setCountry(string $country) {
        $this->country = $country;
    }

    public function getCountry() {
        return $this->country;
    }

    public function location() {
        return $this->city . ', ' . $this->state . ', ' . $this->country;
    }
}


$client1 = new Client("Jan", "Kowalski", "jankowal123");
$client1->setCity("Toru");
$client1->setState("KUJPOM");
$client1->setCountry("PL");
echo $client1->getFullName() . "\n";
echo $client1->location() . "\n";




?>