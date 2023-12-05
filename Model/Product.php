<?php

class Product
{
    public string $price;
    public int $quantity;


    public function __construct($price, $quantity)
    {
        $this->price = $price;
        $this->quantity = $quantity;
    }

    /*public function getPrice($price)
    {
        $price->rand(5, 35) . '$';
    }*/
}
?>