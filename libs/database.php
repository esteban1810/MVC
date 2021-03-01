<?php

class Database{
    private $host;
    private $charset;
    private $db;
    private $user;
    private $password;

    public function __construct(){
        $this->host = constant('HOST');
        $this->charset = constant('CHARSET');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
    }

    public function connect(){
        try {
            $conexion = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset;";
            $conn = new PDO($conexion, $this->user, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
          } catch(PDOException $e) {
            return "Connection failed: " . $e->getMessage();
          }
    }
}

?>