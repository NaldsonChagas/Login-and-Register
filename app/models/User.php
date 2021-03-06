<?php

namespace app\models;

class User
{

    private $name;
    private $email;
    private $password;

    public function __construct($email, $password)
    {

        $this->email = $email;
        $this->password = $password;

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
}
