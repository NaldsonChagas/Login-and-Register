<?php

namespace app\config;

class Connection
{
    public static function getConnection() 
    {
        $pdo = new \PDO('mysql:dbname=registerAndLogin;host=localhost', 'root',
            '');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
