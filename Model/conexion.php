<?php

class Conexion {
    private $dsn;
    private $usuario;
    private $contrasena;
    private $pdo;
    
    public function __construct($dsn, $usuario, $contrasena) {
        $this->dsn = $dsn;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
    }
    
    public function conectar() {
        $this->pdo = new PDO($this->dsn, $this->usuario, $this->contrasena);
    }
    
    public function obtenerPDO() {
        return $this->pdo;
    }
}



?>