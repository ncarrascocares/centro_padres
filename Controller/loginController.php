<?php
session_start();
include_once '../Model/conexion.php';
include_once '../Model/ModeloUsuario.php';
include_once 'Comunes/header.php';

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
        session_start();
        $_SESSION['usuario'] = '';
        header('Location: ../View/Index/index.php');
    }
}else{
    header('Location: ../index.php?id=1');
}

include_once 'Comunes/footer.php';

?>