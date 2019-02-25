<?php

require './vendor/autoload.php';

use model\Cart as Cart ;

$cart = new Cart();

$list = $cart->addItem('apple',5,10);

$list = $cart->addItem('guava',5,10);
$list = $cart->addItem('aaaa',5,10);

print_r($list);

print_r(array_keys($list));

$first_names = $cart->getTotalMoney();

print_r($first_names);

?>