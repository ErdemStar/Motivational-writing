<?php require ("PHP/func.php") ?>
<!doctype html>
<html lang="en">

<head>
  <title>Motivasyon Sayfan</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="./CSS/cover.css" rel="stylesheet">
</head>

<body>

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <header class="masthead mb-auto">
      <div class="inner">
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link active" href="index.php">Anasayfa</a>
          <a class="nav-link" href="ekle.php">Ekle</a>
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      <?php ShowMotivationText(); ?>
      <p class="lead">
        <a href="index.php" class="btn btn-lg btn-secondary">Değiştir</a>
      </p>
    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <div class="row">
          <div class="col-md-6">
            <p>Created by ERDEM YILDIZ</p>
          </div>
          <div class="col-md-6">
            <p><?php echo date("F j, Y, g:i a");  ?></p>
          </div>
        </div>
      </div>
    </footer>

  </div>




  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
