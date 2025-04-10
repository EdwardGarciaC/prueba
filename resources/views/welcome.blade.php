@extends('layouts.app')

@section('titulo','Página principal')

@section('contenido')
    <!-- <h1 class="text-blue-400"> LISTA DE PRODUCTOS</h1> -->
    <div class="hero bg-base-200 min-h-screen">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Accede ahora!</h1>
      <p class="py-6">
        Bienvenidos a nuestro espacio de compraventa de productos. Para iniciar digite su correo electrónico y contraseña
      </p>
    </div>
    <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
      <div class="card-body">
        <fieldset class="fieldset">
          <label class="fieldset-label">Correo Electrónico</label>
          <input type="email" class="input" placeholder="Correo Electrónico" />
          <label class="fieldset-label">Contraseña</label>
          <input type="password" class="input" placeholder="Contraseña" />
          <div><a class="link link-hover">Olvidó la contraseña?</a></div>
          <button class="btn btn-neutral mt-4">Ingresar</button>
        </fieldset>
      </div>
    </div>
  </div>
</div>
    
@endsection
