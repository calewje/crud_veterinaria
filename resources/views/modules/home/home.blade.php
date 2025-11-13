@extends ('layouts.main')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Home</h1>
                <a href="{{ route('logout') }}" class="btn btn-danger">Salir</a>
            </div>
        </div>
    </div>


@endsection