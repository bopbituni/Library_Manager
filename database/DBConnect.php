<?php


class DBConnect
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=staff_manager";
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    public function connect()
    {
        $conn = null;

        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $conn;
    }

}