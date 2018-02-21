<?php
function __autoload($class){
  if(file_exists("models/{$class}.php")){
    require_once "models/{$class}.php";
  }
  else if (file_exists("controller/{$class}.php")){
    require_once "controller/{$class}.php";
  }
}
