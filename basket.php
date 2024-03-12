<?php 



const orders = 'orders.txt';
//print_r([$_GET]);


function saveOrder($firstName, $lastName, $email, $address)
{
  //echo $firstName . $lastName . $email . $address;
  file_put_contents(orders, $firstName . ' ' . $lastName . ' ' . $email . ' ' . $address);
}

saveOrder($_GET['name'], $_GET['surname'], $_GET['email'], $_GET['adress']);

$order = file_get_contents('orders.txt');
$ord = explode(' ', $order);
//print_r($ord);

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

       

         


            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">
                  <?
                

                  print_r($books[$_SESSION['basket']]['title']);

                  
                  ?>
                </h6>
                <small class="text-muted">
                  <?= $value['description'] ?>
                </small>
              </div>
              <span class="text-muted">1500руб. * 1шт</span>
              <span class="text-muted">1500руб.</span>
              <span><a href="#delete" class="btn btn-success btn-sm ">Удалить</a></span>
            </li>
         

         



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
        <form action="/form.php" method = "GET" class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Имя</label>
              <input type="text" name = "name" class="form-control" id="firstName" placeholder="<?= $_SESSION['name']?>" value="" required>
              <div class="invalid-feedback">
                Укажите корректное имя
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Фамилия</label>
              <input type="text" name = "surname" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Укажите корректную фамилию
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(опционально)</span></label>
            <input type="email" name = "email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Укажите корректный email
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Адрес доставки</label>
            <input type="text" name = "adress" class="form-control" id="address" placeholder="город, улица, дом, квартира" required>
            <div class="invalid-feedback">
              Укажите адрес доставки
            </div>
          </div>    
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