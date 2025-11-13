@extends ('layouts.main')

@section('contenido')

    <div class="container justify-center">
        <div class="row mt-3">
            <div class="col"></div>
            <div class="col-5 mt-2 mb-2  ">
                <div class="card mt-2">
                    <div class="card-body">
                        <h2 class="card-title mt-2 mb-4 text-center">Registrar</h2>
                        <div class="d-flex justify-content-center align-items-center h-100vh">
                            <div class="card border border-info rounded-circle " style="width: 150px;display: grid; place-items: center; ">
                                
                                <img src="{{ asset('img/login5.jpeg') }}" class="card-img rounded-circle" alt="..."> 
                            </div>
                        </div>
                        <form action="{{ route('registrar') }}" method="post">
                            @csrf

                            @method('POST')

                            <label for="name" class="form-label">Usuario </label>
                            <input type="text" class="form-control mb-2" id="name" name="name" required>
                            
                            <label for="email" class="form-label">email </label>
                            <input type="email" class="form-control mb-2" id="email" name="email" required>

                            <label for="pasword" class="form-label">Password</label>
                            <input class="form-control mb-2" type="password" id="password" name="password" required>
                            
                            <button type="submit" class="btn btn-primary mt-4">Registarse</button>
                            <a href="{{ route('login') }}" class="btn btn-info mt-4">Login</a>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>

    </div>

@endsection