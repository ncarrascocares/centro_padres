<?php

include_once '../Model/conexion.php';
include_once '../Model/ModeloUsuario.php';

//Instancia de la clase ModeloUsuario
$usuario = new Usuario();
$email = $_POST['email'];
$password = $_POST['password'];

if($email != '' && $password != ''){
    $acceso = $usuario->getAllUser($email, $password);
    if($acceso == 'no-aprobado'){
        header('Location: ../index.php');
        exit;
    }else{
        echo 'Hola mundo';
    }
}else{
    header('Location: ../index.php');
}

?>