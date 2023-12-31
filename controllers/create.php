<?php

session_start();

require_once(__DIR__ . '../../models/user.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $identification = isset($_POST['identification']) ? $_POST['identification'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $name = isset($_POST['name']) ? $_POST['name'] : false;

    if ($identification && $email && $password) {

        $usuario = new UserModel();
        $usuario->setIdentification($identification);
        $usuario->setEmail($email);
        $usuario->setPassword($password);
        $usuario ->setName($name);

        $save = $usuario->createUser();    
        if ($save) {
            $_SESSION['register'] = "complete";               
            header("Location: /virtualvet2/views/");
        } else {
            $_SESSION['register'] = "Error este usuario ya esta registrado";                
            header("Location: /virtualvet2/views/create.php");
        }
    } else {
        $_SESSION['register'] = "failed";
    }
} else {
    $_SESSION['register'] = "failed";
}
