<?php

ob_start();

session_start();

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads");

$url = $_SERVER['HTTP_HOST'];

if(strstr($url,'localhost')==true) {

    $connection = mysqli_connect(getenv('DB_HOST_L'),getenv('DB_USER_L'),getenv('DB_PASS_L'),getenv('DB_NAME_L'));

} elseif(strstr($url,'punipuni.space')==true) {

    $connection = mysqli_connect(getenv('DB_HOST'),getenv('DB_USER'),getenv('DB_PASS'),getenv('DB_NAME'));

}

require_once("functions.php");

require_once("cart.php");














?>