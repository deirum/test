<?php
require_once ('config.php'); // For storing username and password.
session_start();
?>
<!-- HTML code for Bootstrap framework and form design -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/signin.css">
    <title>Авторизация</title>
</head>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Пожалуйста, войдите</h2>
        <label for="inputUsername" class="sr-only">Имя</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Имя" required autofocus>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Пароль" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить меня
            </label>
        </div>
        <button name="Submit" value="Войти" class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>

        <?php
        /* проверка, что форма подтверждена */
        if(isset($_POST['Submit'])){
            // проверка введенного пароля
            $result = password_verify($_POST['Password'], $Password);
            /* проверка, что имя и пароль совпали */
            if( ($_POST['Username'] == $Username) && ($result == true) ) {
                /* успех. завершаем выполнения кода и переходим в админку */
                $_SESSION['Username'] = $Username;
                $_SESSION['Active'] = true;
                header('Location: admin.php');
                exit;
            } else {
                ?>
                <!-- показываем ошибку -->
                &nbsp;
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Внимание!</strong> Неправильная информация.
                </div>
                <?php
            }
        }
        ?>

    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
