@extends('layouts.main')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Administraciós de Usuarios</h1>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones/editar</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Actualizar Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                        
                            <th>{{ $item->id }}</th>
                            <th>{{  $item->name }}</th>
                            <th>{{ $item->email }}</th>
                            <th> 
                                <a href=".." class="btn btn-warning">
                                        <i class="fa-regular fa-pen-to-square"></i>Editar
                                    </a>
                            </th>
                            <th> 
                                <form action="{{ route('usuarios.activo', $item->id) }}" method="POST">
                                    @csrf

                                    <div class="form-check form-switch">

                                        <input type="hidden" name="activo" value="0">

                                        <input class="form-check-input" type="checkbox"name="activo" value="1"onchange="this.form.submit()"{{ $item->activo == 1 ? 'checked' : '' }}>
                                    </div>
                                </form>
                            </th>
                            <th>
                                <a href=".." class="btn btn-info">
                                        <i class="fa-solid fa-passport"></i>Actualizar
                                    </a>
                            </th>
                            
                        </tr>
                        @empty
                            <td>No hay datos en la tabla</td>

                        @endforelse
                    </tbody>
                    </table>
            <a href="{{ route('home') }}" class="btn btn-danger">Regresar</a>
            </div>
        </div>
    </div>

@endsection