<?php
class ConnectDb {
    private static $instance = null;
    private $conn;
   // private $host = 'localhost';
    private $host = '127.0.0.1';
    private $user = 'user';
    private $pass = 'abc?123456789';
    private $dbname = 'test';
    /*private $user = 'root';
    private $pass = '';
    private $dbname = 'test';*/

    private function __construct()
    {
        $this->conn = new PDO("mysql::host=$this->host;dbname=$this->dbname",$this->user,$this->pass);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new ConnectDb();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}