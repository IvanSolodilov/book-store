<?php
$books = json_decode(file_get_contents('https://freetestapi.com/api/v1/books'), true);
//print_r($books);

$firstName = 'John';
$lastName = 'Ivanov';
$email = 'john@yandex.ru';
$address = 'USA, NY, 123 Main St';



$successOrder = 'firstName';
$categories = ['Программирование', 'Сказки', 'Детективы', 'Фантастика'];
$publisher = ['Эксмо', 'ИД Питер', 'OReily'];

$url = $_SERVER['PHP_SELF'];


switch ($url) {
  case '/':
    $h1 = 'Каталог';
    break;

  case '/page=delivery':
    $h1 = 'Доставка';
    break;

  case '/page=login':
    $h1 = 'Войти';
    break;

  case '/?page=basket':
    $h1 = 'Оформление заказа';
    break;

  case '/page=contacts':
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



print_r($_SERVER['QUERY_STRING']);

$page = $_SERVER['QUERY_STRING'];

switch ($page) {
  case 'page=delivery':
    include 'delivery.php';
    break;
  case 'page=basket':
    include 'basket.php';
    break;
  case 'page=contacts':
    include 'contacts.php';
    break;
  case 'page=login':
    include 'login.php';
    break;

  default: 
  case '/':
  include 'main.php';
  break;
 
}



