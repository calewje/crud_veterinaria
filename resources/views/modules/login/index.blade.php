@extends ('layouts.main')

@section('contenido')

    <div class="container justify-center">
        <div class="row mt-3">
            <div class="col"></div>
            <div class="col-5 mt-2 mb-2  ">
                <div class="card mt-2">
                    <div class="card-body">
                        <h2 class="card-title mt-2 mb-4 text-center">Login</h2>
                        <div class="d-flex justify-content-center align-items-center h-100vh">
                            <div class="card border border-success rounded-circle " style="width: 150px;display: grid; place-items: center; ">
                                
                                <img src="{{ asset('img/login6.jpeg') }}" class="card-img rounded-circle" alt="..."> 
                            </div>
                        </div>
                        <form action="{{ route('logear') }}" method="post">
                            @csrf

                            @method('POST')

                            <label for="email" class="form-label">Usuario </label>
                            <input type="email" class="form-control mb-2" id="email" name="email" required>

                            <label for="pasword" class="form-label">Password</label>
                            <input class="form-control" type="password" id="password" name="password" required>
                            
                            <button type="submit" class="btn btn-primary mt-4">Entrar</button>
                            <a href="{{ route('registro') }}" class="btn btn-info mt-4"> Registar</a>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>

    </div>

@endsection