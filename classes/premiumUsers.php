<?php  
require_once __DIR__ . '/users.php';

class PremiumUser extends User {
    private $age;
    private $address;
    private $premium_discount;

    function __construct($name, $lastname, $gender, $mail, $age, $address, $premium_discount) {
        parent::__construct($name, $lastname, $gender, $mail);
        $this->age = $age;
        $this->address = $address;
        $this->premium_discount = $premium_discount;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setPremDisc() {
        return $this->premium_discount = 10 . "%";
    }
}

// $user1 = new PremiumUser("Gianluca", "Gorno", "M", "pippo@email.com");

$user1->setAddress("Urgnano, Via Vittorio Veneto 92");

$user1->setPremDisc();

var_dump($user1);