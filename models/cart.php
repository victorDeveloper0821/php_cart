<?php
//require 'items.php' ;
namespace model;
class Cart{
   // private $who ;
    private $items ;
    function __construct(){
        $this->items = [];
    }
    
    function addItem($name,$amount,$price){
        if(!array_key_exists($name,$this->items)){
            $this->items[$name]['amount']=$amount;
            $this->items[$name]['price']=$price;
        }else{
            $this->items[$name]['amount']+=$amount;
        }
        return $this->items;
    }
    
    function getTotalAmount(){
        $amounts = array_column($this->items,'amount');
        return array_sum($amounts);
    }
    
    function getTotalMoney(){
        $amounts = array_column($this->items,'amount');
        $price = array_column($this->items,'price');

    $total_pay = array_map(function($amount, $price) {
        return $amount * $price;
    }, $amounts, $price);
    
    return $total_pay;
    }
}


?>