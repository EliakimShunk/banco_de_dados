<?php

class MoobiDatabaseHandler
{
    public function __construct()
    {
        $pdo = new PDO("mysql:host=localhost:3306;dbname=bancoEmpresas;charset=utf8", "root", "");
    }
    public function query($sql) {
        $stmt = $pdo->query($sql);
    }
}