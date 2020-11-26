<?php


namespace app\model;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn='mysql:host=localhost;dbname=ProductManage;charset=utf8';
        $this->username='root';
        $this->password='123456@Abc';
    }

    function connectDB(){
        $connectDB = NULL;
        $connectDB = new PDO($this->dsn,$this->username,$this->password);
        return $connectDB;

    }
}