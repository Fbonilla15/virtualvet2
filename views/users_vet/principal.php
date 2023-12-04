<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <title>VIRTUALVET</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Main Styling -->
  <link href="./assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-teal-300 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div class="flex flex-col items-center">
                <img src="../../assets/images/icon_landing3.png" alt="Logo" class="w-12 h-12">
                <h1 class="mt-2 text-xl font-bold">VIRTUAL VET</h1>
            </div>

            
            <!-- Menú de navegación -->
            <ul class="flex">
                <li class="mr-6">
                    <a href="principal.php" class="flex items-center text-white hover:text-yellow-500">
                        <i class="fas fa-home mr-2"></i>
                        Inicio
                    </a>
                </li>
                <li class="mr-6">
                    <a href="citasvet.php" class="flex items-center text-white hover:text-blue-500">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        Citas
                    </a>
                </li>
                <li class="mr-6">
                    <a href="#" class="flex items-center text-white hover:text-green-500">
                        <i class="fas fa-comments mr-2"></i>
                        Chats
                    </a>
                </li>
                <li>
                    <a href="../../controllers/logout.php" class="flex items-center text-white hover:text-red-500">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Cerrar Sesión
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto p-8 mt-8 bg-white rounded shadow-lg">

                   
        <h2 class="text-2xl font-bold mb-4">¡Bienvenido, [Nombre del Usuario]!</h2>

        <!-- Aquí puedes agregar el contenido específico para el usuario normal (cliente) -->

    </div>

</body>

</html>
