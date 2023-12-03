<?php

$modulo = $_REQUEST['modulo'] ?? '';

//Conexión a la Base de Datos
// require_once "clsPlantas.php";

$host="localhost";
    $user="root";
    $pass="";
    $db="alta_usuario";
$con = mysqli_connect($host, $user, $pass, $db);

require('views/panel-header.view.php');

require ('funciones.php');

if ($modulo == "inicio" || $modulo == "") {
  require "inicio.php";
} else {
  $ruta = $modulo . '.php';
  require $ruta;
}

require('views/panel-body.view.php');
