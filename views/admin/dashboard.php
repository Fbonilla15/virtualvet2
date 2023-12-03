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

<body class="m-0 font-sans text-base antialiased font-normal  leading-default bg-gray-50 text-slate-500">
  <div class="absolute w-full bg-teal-300  min-h-75"></div>

  <aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl  max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">


    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent " />

    <div class="mt-8 items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        <li class="mt-0.5 w-full">
          <a class="py-2.7 bg-blue-500/13 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors" href="dashboard.php">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
          </a>
        </li>
        <li class="mt-0.5 w-full">
          <a class="py-2.7  text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors" href="list_usersvet.php">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-bullet-list-67"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Lista Veterinarios</span>
          </a>
        </li>
      </ul>
    </div>


  </aside>


  <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <!-- Navbar -->
    <div class="flex justify-end  pr-4 pt-4">
      <a href="/virtualvet2/controllers/logout.php" class="bg-red-400  hover:bg-red-700 w-35 text-white font-bold py-2 px-4 rounded text-center">Cerrar Sesion</a>
    </div>
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">

      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
              <a class="text-white opacity-50" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">DASHBOARD</li>
          </ol>
          <h6 class="mb-0 font-bold text-white capitalize">DASHBOARD</h6>
        </nav>
      </div>
    </nav>

    <div class="w-full px-6 py-6 mx-auto">
      <!-- table 1 -->

      <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <h1>Administrador</h1>
              <div class="flex justify-center w-full h-96 mt-4 mb-4 ">
                <img src="../../assets/images/dashboard.png" alt="">
              </div>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card 2 -->


      <footer class="pt-4">

      </footer>
    </div>
  </main>

</body>
<!-- plugin for scrollbar  -->
<script src="/assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>

</html>