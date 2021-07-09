<?php

class User {
    //ATTRIBUTI/PROPPRIETA'
    private $name;
    private $lastname;
    private $gender;
    private $mail;   

    //CONSTRUTTORE
    function __construct($name, $lastname, $gender, $mail)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->gender = $gender;
        $this->mail = $mail;
    }

    //FUNZIONI
    public function getFullName() {
        return $this->name . " " . $this->lastname;
    }


}



