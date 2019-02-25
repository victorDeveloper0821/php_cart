<?php

class Item{
    private $name;
    private $price;
    private $amount;
    
    function __construct($name,$price,$amount){
        $this->name = $name ;
        $this->price = $price ;
        $this->amount = $amount ;
    }
    
    public getName(){
        return $this->name;
    }
    public getPrice(){
        return $this->price;
    }
    public getAmount(){
        return $this->amount;
    }
    public setName($name){
        $this->name=$name;
    }
    public setPrice($price){
        $this->price=$price;
    }
    public setAmount($amount){
        $this->amount = $amount;
    }

    }

?>