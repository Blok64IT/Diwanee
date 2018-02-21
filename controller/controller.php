<?php
class Controller extends Model {
    public function index (){
      include_once("views/index.php");
    }

    public function register (){
      include_once("views/registerform.php");
    }

    public function login (){
      include_once("views/loginform.php");
    }

    public function user (){
      include_once("views/profile/index.php");
    }
    public function logout (){
      include_once("views/profile/logout.php");
    }
    public function listUsers (){
      include_once("views/profile/userslist.php");
    }
    public function loginUserController($username, $password){
      $row = $this->loginUserModel($username, $password);
      if($row->num_rows == 1){
        session_start();
        $_SESSION["username"] = $_REQUEST['username'];
        header('Location: http://localhost:8080/diwaneerls/?page=user');
      }
    }
    public function registerUserController($username, $password, $confirmpassword){
      if($password===$confirmpassword){
        if ($response = $this->registerUserModel($username, $password)/*TRUE or FALSE*/ === TRUE) {
          echo "New record created successfully";
          echo '<script type="text/javascript">setTimeout(function(){ window.location = "http://localhost:8080/diwaneerls/?page=login"; }, 2000)</script>';
        } else {
          echo "Error".$response;
        }
      }
    }
    public function listUsersController(){
      return $this->listUsersModel();
    }
}
