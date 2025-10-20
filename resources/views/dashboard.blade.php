@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h4>Dashboard</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title">¡Hola de nuevo, {{ Auth::user()->name }}!</h5>
                    <p class="card-text">Has ingresado al panel de control.</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection