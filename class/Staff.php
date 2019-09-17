<?php


class Staff
{
    private $id;
    private $name;
    private $phone;
    private $address;
    private $email;

    public function __construct($name, $phone, $address, $email)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}