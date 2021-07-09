<?php  
require_once __DIR__ . '/users.php';

class PremiumUsers extends Users {
    private $age;
    private $address;
    private $premium_discount;

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setPremDisc() {
        return $this->premium_discount = 10 . "%";
    }
}

$user1 = new PremiumUsers("Gianluca", "Gorno", "M", "pippo@email.com");

$user1->setAddress("Urgnano, Via Vittorio Veneto 92");

$user1->setPremDisc();

var_dump($user1);