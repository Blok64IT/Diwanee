<?php
  $controller1 = new Controller;
  $users = $controller1->listUsersController();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="http://localhost:8080/diwaneerls/">home</a> | <a href="http://localhost:8080/diwaneerls/?page=user">user</a>  | <a href="http://localhost:8080/diwaneerls/?page=logout">logout</a>
    <br><br><br>

    <ul>
      <?php
        while($user = $users->fetch_object()) {
      ?>
      <li><?= "username: ".$user->usr_usname." - created: ".$user->usr_created ?></li>

    <?php } ?>
    </ul>

  </body>
</html>



<ul>
  <?php
    while($user = $users->fetch_object()) {
  ?>
  <li><?= "username: ".$user->usr_usname." - created: ".$user->usr_created ?></li>

<?php } ?>
</ul>
