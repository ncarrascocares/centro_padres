<?php
session_start();
require_once 'conexion.php';

class Usuario{
    
    private $pdo;
    
    public function __construct() {
        $conexion = new Conexion('mysql:host=localhost;dbname=centro_padres', 'root', '');
        $conexion->conectar();
        $this->pdo = $conexion->obtenerPDO();
    }
    
    public function getAllUser($correo, $password) {
        // Utiliza la instancia de PDO para realizar una consulta
        $consulta = 'SELECT * FROM user WHERE correo = :correo AND password = :password';
        $sentencia = $this->pdo->prepare($consulta);
        $sentencia->execute(array(':correo'=>$correo,'password'=>$password));
        
        if($sentencia->rowCount() > 0){
            $consulta = 'SELECT nombre, apellido FROM user WHERE correo = :correo';
            $sentencia = $this->pdo->prepare($consulta);
            $sentencia->execute(array(':correo'=>$correo));
            $datos = $sentencia->fetch();
            $_SESSION['nombre'] = $datos['nombre'];
            $_SESSION['apellido'] = $datos['apellido'];
            $_SESSION['cargo'] = $datos['cargo'];
            //echo $_SESSION['nombre'];
            //echo $_SESSION['apellido'];
            //die();
            return "aprobado";
        }else{
            return "no-aprobado";
        }
        
        
    }

}