<?php

// 1- definire la struttura di una tabella users che contiene i dati degli utenti di un blog
// 2- definire una classe User che "mappa" la tabella users
// 3- creare alcune istanze della classe User per stampare i dati degli utenti

require_once "user.php";
require_once "admin.php";

// Test user 1
$user_1 = new User("Mario", "Rossi", "mario.rossi@gmail.com");
var_dump($user_1);

$user_1->setAge(15);
var_dump($user_1);

// Test user 2
$user_2 = new User("Paolo", "Bianchi", "paolo.bianchi@gmail.com");
var_dump($user_2);

try{
    $user_2->setAge(5);
}catch(Exception $e){
    echo "ERROR MESSAGE --->".$e->getMessage();
}
var_dump($user_2);


// Test Admin
$admin_1 = new Admin("Sara", "Verdi", "sara.verdi@gmail.com", 10);
var_dump($admin_1);

try{
    $admin_1->setAge(60);
}catch(Exception $e){
    echo "ERROR MESSAGE --->".$e->getMessage();
}
var_dump($admin_1);


?>
