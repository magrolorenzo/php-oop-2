<?php

class User{
    public $name;
    public $surname;
    public $age;
    public $email;
    public $password;

    function __construct($_name, $_surname){
        $this->name = $_name;
        $this->surname = $_surname;
    }

    public function setAge($_age){
        if(is_numeric($_age) && $_age > 0 && $_age < 120){
            $this->age = $_age;
        } else {
            throw new Exception ("Età inserita non valida");
        };
    }

};

?>
