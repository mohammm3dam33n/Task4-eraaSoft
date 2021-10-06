<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="about/about.php">
    <link rel="stylesheet" href="contact/contact.php">
    <link rel="stylesheet" href="profile/profile.php">


    <title>Hello, world!</title>
  </head>
  <body>
  <?php
  $f="mohammed ameen ";
  $t="mohammm3dam33n@gmail.com";
  $y="01154449439";
  ?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact/contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile/profile.php">Profile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>










<div class="container">
<div class="row row-cols-lg-3 row-cols-md-2 row-cols-xs-1">
  
<div class="col">
      <div class="card ">
        <div class="card-body">
          <p class="card-text"><span class="fw-bolder">name: </span><?= $f ?></p>
          <p class="card-text"><span class="fw-bolder">email: </span><?= $t ?></p>
           <p class="card-text"><span class="fw-bolder">phone: </span><?= $y ?></p>
              <div class="links">
               <a href="" class="btn btn-primary">facbook</a>
               <a href="#" class="btn btn-primary">Twitter</a>
               <a href="#" class="btn btn-primary">instagram</a>
              </div>
        </div>
      </div>
  </div>
  <div class="col">
      <div class="card ">
        <div class="card-body">
          <p class="card-text"><span class="fw-bolder">name: </span><?= $f ?></p>
          <p class="card-text"><span class="fw-bolder">email: </span><?= $t ?></p>
           <p class="card-text"><span class="fw-bolder">phone: </span><?= $y ?></p>
              <div class="links">
               <a href="" class="btn btn-primary">facbook</a>
               <a href="#" class="btn btn-primary">Twitter</a>
               <a href="#" class="btn btn-primary">instagram</a>
              </div>
        </div>
      </div>
  </div>
  <div class="col">
      <div class="card ">
        <div class="card-body">
          <p class="card-text"><span class="fw-bolder">name: </span><?= $f ?></p>
          <p class="card-text"><span class="fw-bolder">email: </span><?= $t ?></p>
           <p class="card-text"><span class="fw-bolder">phone: </span><?= $y ?></p>
              <div class="links">
               <a href="" class="btn btn-primary">facbook</a>
               <a href="#" class="btn btn-primary">Twitter</a>
               <a href="#" class="btn btn-primary">instagram</a>
              </div>
        </div>
      </div>
  </div>
  

  </div>

  </div>
  </div>















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>