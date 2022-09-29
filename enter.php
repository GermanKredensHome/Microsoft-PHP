<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Регистрация</title>
</head>
<body>

  <h1>Авторизация</h1>

<?php

if (empty($_POST)) {

?>

  <form action="" method="POST">
  <label for="login">Логин</label><br>
  <input id="login" name="login"><br><br>
  <label for="password1">Пароль</label><br>
  <input id="password1" type="password" name="password"><br><br>
  <label for="password2">Проверка пароля</label><br>
	<input id="password2" type="password" name="confirm"><br><br><br>
	<input type="submit" value="Отправить">
  </form>

<?php

  } elseif (!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['confirm'])) {

        if ($_POST['password'] == $_POST['confirm']) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            echo "Вы зарегистрированы как $login";
?>

     <p><a href="index.php">Вернуться</a></p>

<?php

      $user = $login . ':' . ' ' . $password;
      $file = fopen(__DIR__ . '/users.txt', 'a');
      fputs($file, $user . PHP_EOL);
      fclose($file);

?>

     <p><a href="users.txt" download>Скачать базу пользователей</a></p>

<?php

        } else {
          echo "Ваш пароль не совпадает<br>";

?>

          <a href="?a=0">Вернуться к авторизации</a>

<?php

           if ($_GET['a'] = 0) unset($_POST);

         }

    } else {
      echo "Не все поля заполнены<br>";

?>

    <a href="?a=0">Вернуться к авторизации</a>

<?php

    if ($_GET['a'] = 0) unset($_POST);
}

?>

</body>
</html>