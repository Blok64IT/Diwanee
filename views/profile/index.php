<?php
session_start();
if (!$_SESSION['username']) {
      header('Location: http://localhost:8080/diwaneerls/?page=login');

}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="http://localhost:8080/diwaneerls/">home</a> | <a href="http://localhost:8080/diwaneerls/?page=listUsers">list all users</a> | <a href="http://localhost:8080/diwaneerls/?page=logout">logout</a>
    <br><br><br>
    <?= 'Hello'." ".$_SESSION['username']; ?>
  </body>
</html>
