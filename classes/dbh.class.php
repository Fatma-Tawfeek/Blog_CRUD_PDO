<?php

class Dbh{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "oopblog";
    
    public function connect(){
        $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dns, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}