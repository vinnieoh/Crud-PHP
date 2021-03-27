<?php

use PDO;
use PDOException;

class Database
{
    private $dsn;
    private $username;
    private $password;
    private $conn;


    public static function getConn()
    {
        try {

            $dsn = "mysql:host=localhost;dbname=crud_php";
            $username = "root";
            $password = "root12345";

            $conn = new PDO($dsn, $username, $password);

        }catch (PDOException $e){
            die("Erro: " . $e->getMessage());
        }

    }

}