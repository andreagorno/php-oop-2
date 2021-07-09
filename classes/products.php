<?php

class Product {
    public $category;
    public $category_info;
    
    function __construct ($category, $category_info) {
        $this->category = $category;
        $this->category_info = $category_info;
    }    
};