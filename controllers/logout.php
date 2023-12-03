<?php
session_start();
session_destroy();
header("Location: /virtualvet2/login.php"); // Redirecciona a la página de inicio de sesión
exit();
