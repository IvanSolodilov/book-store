<? include 'inc/menu.inc.php';
include 'inc/config.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <!-- <link href="starter-template.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="style.css">

  <title>PHP часть 1. Основы PHP</title>

  <style>
    .card-deck2 {
      margin-top: 20px;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }

    .card {
      width: 50%;
    }



    .card-body img {
      display: block;
      margin: 0 auto 15px;

    }

    .card-footer {
      background: transparent;
      border: 0;
    }

  
   
  </style>

</head>

<body>

 <?php include 'inc/nav.inc.php' ?>

  <div class="container">

    <div class="row">
      <div class="col-md-3 col-sm-3 ">

        <h4>Категория</h4>
        <div class="row">
          <? foreach ($categories as $cat) { ?>
            <a class="dropdown-item" href="#">
              <?= $cat ?>
            </a>
          <? } ?>

        </div>

        <hr>

        <h4>Цена</h4>

        <div class="row">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">от</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"> &nbsp;
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">до</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default">&nbsp;

            <button type="button" class="btn btn-success">Найти</button>
          </div>
        </div>
        <hr>
        <h4>Издательство</h4>

        <? foreach ($publisher as $pub) { ?>

          <div class="row">
            <ul class="list-group col-md-12 col-sm-12">
              <li class="list-group-item">
                <input type="checkbox" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">
                  <?= $pub ?>
                </label>
              </li>
            </ul>
          </div>
        <? } ?>


        <hr>


      </div>

      <div class="col-md-9 col-sm-9 ">
        <h1>
          <?= $h1 ?>
        </h1>

        <!-- <? foreach ($books as $key => $value) {
          echo $key;
          echo $value['title'];
        } ?> -->

        <div class="card-deck2">

          <?php foreach ($books as $key => $value): ?>

            <div class="card">
              <div class="card-body">
                <img height="100px"
                  src="<?= 'data:image/png;base64,' . base64_encode(file_get_contents($value['cover_image'])) ?>"
                  alt="...">
                <h3 class="card-title">
                  <?= $value['title'] ?>
                </h3>
                <p class="card-text"><small class="text-muted">Автор:
                    <?= $value['author'] ?>
                  </small></p>
                <p class="card-text">
                  <?= $value['description'] ?>
                </p>
              </div>
              <div class="card-footer">
                <a href="/?add=<?= $value['id'] ?>"> <button type="button" class="btn btn-primary">В корзину</button></a>
              </div>
            </div>
          <?php endforeach ?>

        </div>


      </div>


    </div>


  </div>

  <div class="container">


  </div><!-- /.container -->

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