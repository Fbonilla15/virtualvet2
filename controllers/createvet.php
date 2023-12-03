<?php
session_start();

require_once(__DIR__ . '../../models/user.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $identification = isset($_POST['identification']) ? $_POST['identification'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    if ($identification && $email && $password) {

        $usuario = new UserModel();
        $usuario->setIdentification($identification);
        $usuario->setEmail($email);
        $usuario->setPassword($password);

        $save = $usuario->createUser_vet();
        
        if ($save) {
            header("Location: /virtualvet2/views/admin/list_usersvet.php");
        } else {
            $_SESSION['register'] = "Error este administrador ya esta registrado";
            header("Location: /virtualvet2/views/admin/form_vet.php");
        }
    } else {
        $_SESSION['register'] = "failed";
    }
} else {
    $_SESSION['register'] = "failed";
}
