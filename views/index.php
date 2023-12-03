<?php
session_start();
$userLogued = $_SESSION['user'];
if (!isset($userLogued)) {
  header("Location: /virtualvet2/login.php");
}
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Home</title>
</head>

<body>
    <p>aqui va el formulario de informacion personal</p>
</body>

</html>
