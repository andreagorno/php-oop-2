<?php 

require_once __DIR__ . '/products.php';

class SpecificProduct extends Product {
    public $brand;
    public $product_name;
    public $price;

    function __construct($category, $category_info, $brand, $product_name, $price) {
        parent::__construct($category, $category_info);
        $this->brand = $brand;
        $this->$product_name =$product_name;
        $this->price =$price;
    }

    public function setPrice($net_price) {
        $this->price = $net_price + ($net_price * 22 / 100);
        return $this->price;
    }

}