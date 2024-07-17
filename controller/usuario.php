<?php

session_start();

require "../config/conexion.php";
require "../model/usuario.php";

$usuarios = new Usuario();

$option = '';
$id = '';
$usuario = '';
$contrasena = '';
$nombres = '';
$apellidos = '';
$dni = '';
$celular = '';
$rol = '';
$estado = '';

if (isset($_POST['option']))
    $option = $_POST['option'];
if (isset($_POST['id']))
    $id = $_POST['id'];
if (isset($_POST['usuario']))
    $usuario = $_POST['usuario'];
if (isset($_POST['contrasena']))
    $contrasena = $_POST['contrasena'];
if (isset($_POST['nombres']))
    $nombres = $_POST['nombres'];
if (isset($_POST['apellidos']))
    $apellidos = $_POST['apellidos'];
if (isset($_POST['dni']))
    $dni = $_POST['dni'];
if (isset($_POST['celular']))
    $celular = $_POST['celular'];
if (isset($_POST['rol']))
    $rol = $_POST['rol'];
if (isset($_POST['estado']))
    $estado = $_POST['estado'];

switch ($option) {
    case 'login':
        echo json_encode($usuarios->login($usuario, $contrasena));
    break;
}    


?>