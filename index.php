<?php
require "config/config.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'index';
$controller = new Controller;
$controller->$page();
