<?php

class User{
    public $name;
    public $surname;
    public $email;
    public $age;
    public $password;

    function __construct($_name, $_surname, $_email){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

    public function setAge($_age){
        if(is_numeric($_age) && $_age > 14 && $_age < 120){
            $this->age = $_age;
        } else {
            throw new Exception ("Età inserita non valida!<br>");
        };
    }

    public function setPassword($_password){
        if(strlen($_password) > 8){
            $this->password = strval($_password);
        } else {
            throw new Exception ("Password inserita non valida! <br>");
        };
    }

};

?>
