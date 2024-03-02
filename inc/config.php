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

$hours = date('H');
$color1;








