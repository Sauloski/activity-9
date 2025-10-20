@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 70vh;">
        <div class="col-md-8 text-center">
            
            <h1 class="display-3">Actividad 9</h1>
            <p class="lead text-muted">Inicia sesión o regístrate para continuar</p>
            
            <div class="mt-4">
                <a class="btn btn-primary btn-lg px-4 mx-2" href="{{ route('register') }}" role="button">Registrarse</a>
                <a class="btn btn-secondary btn-lg px-4 mx-2" href="{{ route('login') }}" role="button">Iniciar Sesión</a>
            </div>

        </div>
    </div>
</div>
@endsection