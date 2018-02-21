<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register form</title>
  </head>
  <body>
    <form action="" method="post" class="login-form">
      <input type="text" name="username" placeholder="Username"><br><br>
      <input type="password" name="password" placeholder="Password"><br><br>
      <input type="password" name="cfpassword" placeholder="Confirm Password"><br><br>
      <button type="submit">Sing up</button>
    </form>
  </body>
</html>
<style media="screen">
  .login-form {
    padding: 15px;
    border-radius: 5px;
    background: rgb(102, 2, 60);
    width: 400px;
    margin: 100px auto;
  }
  .login-form input {
    width: 100%;
    height: 30px;
    border:1px solid rgb(105, 195, 185);
  }
  .login-form button {
    width: 100px;
    border-radius: 10px;
    border:1px solid rgb(142, 127, 172);
    margin-left: 33%;
  }
</style>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $controller1 = new Controller;
    $controller1->registerUserController($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['cfpassword']);
}
 ?>
