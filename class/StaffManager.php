<?php


class StaffManager
{
    protected $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM staffs";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $staff = new Staff($item['name'], $item['phone'], $item['address'], $item['email']);
            $staff->setId($item['id']);
            array_push($arr, $staff);
        }

        return $arr;
    }
}