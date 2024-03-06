<?php
$books = json_decode(file_get_contents('https://freetestapi.com/api/v1/books'), true);
//print_r($books);

$firstName = 'John';
$lastName = 'Ivanov';
$email = 'john@yandex.ru';
$address = 'USA, NY, 123 Main St';

const orders = 'orders.txt';

$successOrder = 'firstName';
$categories = ['Программирование', 'Сказки', 'Детективы', 'Фантастика'];
$publisher = ['Эксмо', 'ИД Питер', 'OReily'];

$url = $_SERVER['PHP_SELF'];


switch ($url) {
  case '/index.php':
    $h1 = 'Каталог';
    break;

  case '/delivery.php':
    $h1 = 'Доставка';
    break;

  case '/login.php':
    $h1 = 'Войти';
    break;

  case '/basket.php':
    $h1 = 'Оформление заказа';
    break;

  case '/contacts.php':
    $h1 = 'Контакты';
    break;

  default:
    # code...
    break;
}

$d = date('N');
$day;

switch ($d) {
  case '1':
    $day = 'Сегодня: Понедельник';
    break;
  case '2':
    $day = 'Сегодня: Вторник';
    break;
  case '3':
    $day = 'Сегодня: Среда';
    break;
  case '4':
    $day = 'Сегодня: Четверг';
    break;
  case '5':
    $day = 'Сегодня: Пятница';
    break;
  case '6':
    $day = 'Сегодня: Суббота';
    break;
  case '7':
    $day = 'Сегодня: Воскресенье';
    break;

  default:
    # code...
    break;
}

function saveOrder($firstName , $lastName , $email , $address) {
  //echo $firstName . $lastName . $email . $address;
  file_put_contents(orders,  $firstName. ' '. $lastName. ' '. $email. ' '. $address);
}

saveOrder('Ivan','Ivanov','my@mail.ru','USA');

$order = file_get_contents('orders.txt');
$ord = explode(' ', $order);
print_r($ord);

print_r ($_SERVER['QUERY_STRING']);

$page = $_SERVER['QUERY_STRING'];

switch ($page) {
  case 'page=delivery':
    include 'delivery.php';
    break;
  
  default:
    # code...
    break;
}



