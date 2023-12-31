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
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        <link  rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-teal-300 p-4">
        <div class="container mx-auto flex justify-between items-center">
             <div class="flex text-white flex-col items-center">
                <img src="../assets/images/icon_landing3.png" alt="Logo" class="w-12 h-12 bg-white">
                <h1 class="mt-2 text-xl font-bold">VIRTUAL VET</h1>
             </div>
            <ul class="flex space-x-4">
                <li><a href="index.php" class="text-white hover:text-yellow-500"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="#" class="text-white hover:text-blue-500"><i class="fas fa-calendar"></i> Citas</a></li>
                <li><a href="#" class="text-white hover:text-green-500"><i class="fas fa-comments"></i> Chats</a></li>
            </ul>
            <a href="../controllers/logout.php" class="text-white hover:text-red-500"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
        </div>
    </nav>

    <!-- Content -->
        <div class="container mx-auto p-8 mt-8 bg-white rounded shadow-lg">
          <div class="flex flex-row">
               
                    
                    <div class="mt-4 ml-2 mr-2">
                        <img src="../assets/images/icon1.png" alt="Imagen 1" class="w-full h-full object-cover" />
                    </div>
                    <div class="mt-4 ml-2 mr-2">
                        <img src="../assets/images/icon2.png" alt="Imagen 1" class="w-full h-full object-cover" />
                    </div>

                    <div class="mt-4 ml-2 mr-2">
                        <img src="../assets/images/icon3.png" alt="Imagen 1" class="w-full h-full object-cover" />
                    </div>
                    
            </div>

            <div class="mt-4  ">
                    <h1 class="font-sans text-2xl font-bold mb-2">Descubre el Confort de la Telemedicina Animal, Bienvenido a Virtual-Vet</h1>
                    <h2 class="line-clamp-5 font-sans text-lg">
                    ¡Bienvenido a nuestra plataforma líder en telemedicina animal! En nuestro mundo moderno y ajetreado, cuidar de nuestros amigos peludos nunca ha sido tan fácil y 
                    conveniente. En nuestra página, no solo encontrarás la comodidad de acceder a servicios veterinarios desde la comodidad de tu hogar, sino que también te sumergirás en un oasis de motivación y apoyo para asegurar la salud y felicidad de tus queridas mascotas.
                    </h2>

            </div>

            
            <div class="mt-4 ml-2 mr-2">
                        <img src="../assets/images/banner.png" alt="Imagen 1" class="w-full h-96 object-cover" />
            </div>

            <div class="mt-4  ">
                    <h1 class="font-sans text-2xl font-bold mb-2">¡Cuida hoy para un mañana más saludable!</h1>
                    <h2 class="line-clamp-5 font-sans text-lg">
                    Nuestro llamado es a todos los amantes de los animales: únete a nosotros en este viaje hacia una vida más saludable y feliz para tus mascotas. La telemedicina animal es el futuro, y estamos aquí para liderar el camino. Inspírate, conéctate y cuida a tus peludos amigos con la comodidad y confianza que se merecen.
                    </h2>

            </div>

    </div>


</body>

</html>
