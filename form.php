<?php
const orders = 'orders.txt';
//print_r([$_GET]);


function saveOrder($firstName, $lastName, $email, $address)
{
  //echo $firstName . $lastName . $email . $address;
  file_put_contents(orders, $firstName . ' ' . $lastName . ' ' . $email . ' ' . $address);
}

saveOrder(strip_tags($_GET['name']), $_GET['surname'], $_GET['email'], $_GET['adress']);

$order = file_get_contents('orders.txt');
$ord = explode(' ', $order);
print_r($ord);