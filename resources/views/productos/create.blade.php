@extends('layouts.app')
@section('titulo', 'Crear Producto')
@section('cabecera', 'Crear un nuevo Producto')

@section('contenido') 
    <div class="flex justify-center">
        <div class="card w-100 shadow-2xl bg-base-100">
            <div class="card-body">
                {{-- Formulario para crear producto --}}
                <form action="{{route('producto1s.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                     {{-- Nombre --}}
                    <div class="form-control">
                        <label class="label" for="nombre">
                            <span class="label-text">Nombre</span>
                        </label>
                        <input type="text" name="nombre" placeholder="Nombre del producto" maxlength="100" class="input input-bordered" value="{{old('nombre')}}" required />
                    </div>
                     {{-- Imagen --}}
                     <div class="form-control">
                        <label class="label" for="imagen">
                            <span class="label-text">Imagen</span>
                        </label>
                        <input type="file" name="imagen" class="file-input file-input-bordered file-input-success file-input-sm w-full max-w-xs"  accept=".jpg" required />
                    </div>
                    {{-- Descripcion --}}
                    <div class="form-control">
                        <label class="label" for="descripcion">
                            <span class="label-text">Descripción</span>
                        </label>
                        <input type="text" name="descripcion" placeholder="Escriba la descripción" maxlength="255" class="input input-bordered" value="{{old('descripcion')}}" />
                    </div>
                    {{-- Precio --}}
                    <div class="form-control">
                        <label class="label" for="precio">
                            <span class="label-text">Precio</span>
                        </label>
                        <input type="number" name="precio" placeholder="Escriba el precio" class="input input-bordered" value="{{old('precio')}}" required />
                    </div>
                    {{-- Cantidad --}}
                    <div class="form-control">
                        <label class="label" for="cantidad">
                            <span class="label-text">Cantidad</span>
                        </label>
                        <input type="number" name="cantidad" placeholder="Escriba la Cantidad" class="input input-bordered" value="{{old('cantidad')}}" required />
                    </div>
                    <!-- botones -->
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Crear Producto</button>
                        <a href="{{ route('producto1s.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection