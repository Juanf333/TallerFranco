@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BIENVENIDOS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenidos a JuanStore') }}<br>
                    {{ __('Aqui podras realizar tus pedidos de una forma muy sencilla,') }}<br>
                    {{ __('Crear nuevos Clientes y nuevos Productos...') }} <br>
                    {{ __('Disfrutalo!') }}
                    <br>
                    <div id="carouselExampleSlidesOnly" class="carousel slide container py-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/img/1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/img/2.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/img/3.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
