@extends('layouts.app')
@section('content')
<h1 class="text-center">PEDIDOS</h1>

<table class="container table color table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">cliente id</th>
            <th scope="col">Numero artículos</th>
            <th scope="col">Código artículo</th>
            <th scope="col">Nombre artículo</th>
            <th scope="col">Sub Total</th>
            <th scope="col">Iva</th>
            <th scope="col">Valor Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidos as $pedido)
        <tr>
            <td>{{ $pedido->id}}</td>
            <td>{{ $pedido->cliente_id}}</td>
            <td>{{ $pedido->num_articulos}}</td>
            <td>{{ $pedido->codigo_articulo}}</td>
            <td>{{ $pedido->nom_articulo}}</td>
            <td>{{ $pedido->sub_total}}</td>
            <td>{{ $pedido->iva}}</td>
            <td>{{ $pedido->valor_total}}</td>
            <td>
                <a href="{{ route('pedidos.edit', $pedido) }}">
                    <button type="button"
                    class="btn btn-warning btn-sm">Editar</button></a>

                    <form action="{{ route('pedidos.destroy', $pedido) }}" class="d-inline" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="text-center nav-item">
      <a href="pedidos/create" class="btn btn-info">Hacer Pedido</a>
    </li>
  </ul>
@endsection
