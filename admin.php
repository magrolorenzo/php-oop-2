<?php

require_once "user.php";

class Admin extends User{

    public $security_level;

    function __construct($_name, $_surname, $_email, $_security_level ){

        parent::__construct($_name, $_surname, $_email);
        $this->security_level = $_security_level;

    }


}


?>
