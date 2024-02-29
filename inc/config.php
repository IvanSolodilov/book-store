<?php
  $books = json_decode(file_get_contents('https://api.itbook.store/1.0/new'), true);
  print_r($books);

  $firstName = 'John';
  $lastName = 'Ivanov';
  $email = 'john@yandex.ru';
  $address = 'USA, NY, 123 Main St';

  $successOrder = 'firstName';
  $categories = ['Программирование','Сказки', 'Детективы', 'Фантастика'];
  $publisher = ['Эксмо', 'ИД Питер', 'OReily'];

  $menu = [
    'Доставка' => 'delivery.html',
    'Контакты' => 'contacts.html',
    'Войти' => 'login.html',
    'Корзина' => 'basket.html'
  ];

