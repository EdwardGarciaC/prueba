@extends('layouts.app')

@section('titulo','Productos')

@section('contenido')
<!-- Boton para crear un producto nuevo -->
    <div class="flex justify-end m-5">
    <a href="{{ route('producto1s.create') }}"class="btn btn-outline " >Nuevo Producto</a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4 gap-y-1">
        @foreach ($producto1s as $producto)
            <div class="card bg-base-150 w-100 shadow-sm">
                <figure>
                    <img
                    src="https://picsum.photos/id/{{ $producto->id }}/200/300"
                    alt="{{ $producto-> nombre }}" />
                </figure>
                <div class="card-body">
                <h2 class="card-title">{{ $producto-> nombre }}</h2>
                <div class="badge badge-sm badge-accent ">Precio $  {{ $producto-> precio }}
                <span class="flex justify-end m-5 badge badge-sm badge-secondary">Cantidad {{ $producto-> cantidad }}</span></div>
                <p>{{ $producto-> descripcion }}</p>
                <div class="card-actions ">
                <!-- <button class="btn btn-primary">Buy Now</button> -->
                 <a href="{{ route('producto1s.edit', $producto->id) }}" class="btn btn-outline btn-xs" >Editar</a>
                 <form action="{{ route('producto1s.destroy', $producto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline btn-xs">Eliminar</button>
                 </form>
                </div>
                </div>
            </div>   
        @endforeach
    </div>   
    
@endsection