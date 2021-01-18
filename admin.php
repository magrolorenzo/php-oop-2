<?php

require "user.php";

class Admin extends User{

    public $blog_topic_area;

    function __construct($_name, $_surname,$_blog_topic_area ){

        parent::__construct($_name, $_surname);
        $this->blog_topic_area = $_blog_topic_area;
    }
    

}


?>
