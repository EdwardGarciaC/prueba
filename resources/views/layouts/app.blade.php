<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','Prueba')</title>
    @vite('resources/css/app.css')
</head>
<body>
   <!-- <h1 class="text-3xl font-bold underline"> Hello world! </h1> correspondia a ejercicio anterior  -->
    <header>
        {{-- Barra de Navegación  Navbar --}}
        @include('layouts.navbar')
    </header>
    <main>
        <div class="text-center text-blue bg-red-900 my-5">
           <h1 class="text-lg font-semibold m-5 uppercase">
           @yield('cabecera')
           </h1>
        </div>
           @yield('contenido')
        
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>