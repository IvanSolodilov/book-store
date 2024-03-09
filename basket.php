<?php 
const orders = 'orders.txt';

function saveOrder($firstName, $lastName, $email, $address)
{
  //echo $firstName . $lastName . $email . $address;
  file_put_contents(orders, $firstName . ' ' . $lastName . ' ' . $email . ' ' . $address);
}

saveOrder('Ivan', 'Ivanov', 'my@mail.ru', 'USA');

$order = file_get_contents('orders.txt');
$ord = explode(' ', $order);
print_r($ord);

?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <link rel="stylesheet" href="style.css">

  <title>PHP часть 1. Основы PHP</title>


</head>

<body>

<?php include 'inc/nav.inc.php' ?>


  <div class="container">
    <div class="py-5 text-center">
      <h1>
        <?= $h1 ?>
      </h1>
      <p class="lead">Внимательно заполните поля формы, проверьте корректность введённых данных и позиции товаров и их
        количество.</p>
    </div>

    <div class="row">
      <div class="col-md-6 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Корзина</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">

          <?php

          $limit = 3; // Желаемое количество элементов для вывода          
          $count = 0; // Инициализация счетчика
          ?>

          <?php foreach ($books as $key => $value) { ?>


            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">
                  <?= $value['title'] ?>
                </h6>
                <small class="text-muted">
                  <?= $value['description'] ?>
                </small>
              </div>
              <span class="text-muted">1500руб. * 1шт</span>
              <span class="text-muted">1500руб.</span>
              <span><a href="#delete" class="btn btn-success btn-sm ">Удалить</a></span>
            </li>

            <?php $count++; ?>

            <?php if ($count >= $limit) {
              break; // Прерываем цикл после достижения желаемого количества элементов
            } ?>

          <?php } ?>



          <li class="list-group-item d-flex justify-content-between">
            <span>Всего: </span>
            <strong>
              <?
              $summa = 2700;
              echo $summa . ' руб.' ?>
            </strong>

          </li>
        </ul>

      </div>
      <div class="col-md-6 order-md-1">
        <h4 class="mb-3">Информация</h4>
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Имя</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Укажите корректное имя
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Фамилия</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Укажите корректную фамилию
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(опционально)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Укажите корректный email
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Адрес доставки</label>
            <input type="text" class="form-control" id="address" placeholder="город, улица, дом, квартира" required>
            <div class="invalid-feedback">
              Укажите адрес доставки
            </div>
          </div>
          <!--
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Запомнить адрес доставки как основной адрес</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Интервал времени</h4>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Часть недели</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Выберите...</option>
              <option>Рабочие дни (пн-пт)</option>
              <option>Выходные (сб-вс)</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
        </div>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="deliveryInterval" type="radio" class="custom-control-input" checked required value="1">
            <label class="custom-control-label" for="credit">с 8 до 13</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="deliveryInterval" type="radio" class="custom-control-input" required value="2">
            <label class="custom-control-label" for="debit">с 13 до 18</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="deliveryInterval" type="radio" class="custom-control-input" required value="3">
            <label class="custom-control-label" for="paypal">с 18 до 23</label>
          </div>
        </div>
        <hr class="mb-4">
        <h4 class="mb-3">Платёжная информация</h4>
-->
          <!-- ВНИМАНИЕ! Не храните платёжную информацию на своём сервере -->
          <!--        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Имя на карте</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Полностью как на карте</small>
            <div class="invalid-feedback">
              Укажите имя на карте
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Номер кредитной карты</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Должен быть указан номер кредитной карты
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-6">
            <label for="cc-expiration">Срок действия до</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Укажите срок действия
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Укажите секретный код CVV
            </div>
          </div>
        </div> -->
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Оформить заказ!</button>
        </form>
      </div>
    </div>


    <footer class="footer">
      <div class="container">
        <span class="text-muted">
          <?= date('Y') ?> &copy; Интернет-магазин Книжка
        </span>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
</body>

</html>