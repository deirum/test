<?php
  session_start(); /* старт сессии */
  if($_SESSION['Active'] == false){ /* редирект на логин страницу, если не залогинен */
    header("location:login.php");
	  exit;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
    <title>Админ-панель</title>
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Главная</a></li>
            <li role="presentation"><a href="http://viki.pro">Лендинг</a></li>
            <li role="presentation"><a href="#">Портфолио</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">PHP админка и авторизация от Виктории Зуевич</h3>
      </div>

      <div class="jumbotron">
        <h1>Статус: вы вошли</h1>
        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
        <p><a class="btn btn-lg btn-success" href="logout.php" role="button">Выйти</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Различная информация</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

          <h4>Различная информация</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

          <h4>Различная информация</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="col-lg-6">
          <h4>Различная информация</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

          <h4>Различная информация</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

          <h4>Различная информация</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>

      <footer class="footer">
        <p>&copy; Виктория Зуевич 2019</p>
      </footer>

    </div>
  </body>
</html>
