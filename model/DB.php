<?php
class DB
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=dbexample;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        	
        return $pdo;
    }
}