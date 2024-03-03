<style>
  .bg-light {
    background-image: url(<?php echo (date('H') > 18) ? 'img/nighr.gif' : 'img/sun.gif' ?>) !important;
    background-position: left;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Интернет-магазин Книжка</a>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="книгу.." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти!</button>
    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <?php foreach ($menu as $links => $url) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= $url ?>">
              <?= $links ?>
            </a>
          </li>
        <?php } ?>

        </li>
      </ul>
    </div>
    <?= $day?>
  
  </div>
</nav>