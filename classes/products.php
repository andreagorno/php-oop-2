<?php

class Products {
    private $name;
    private $category;
    private $description;
    private $price;

    function __construct ($name, $category, $description, $price) {
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
        $this->price = $price;
    }

    public function setPrice($net_price) {
        $this->price = $net_price + ($net_price * 22 / 100);
        return $this->price;
    }
};


