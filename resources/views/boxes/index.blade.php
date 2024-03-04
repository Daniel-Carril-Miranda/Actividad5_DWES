<div>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Cajas</h1>
                <a href="{{ route('boxes.create') }}" class="btn btn-primary">Crear nueva Caja</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Etiqueta</th>
                            <th>Ubicación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($boxes as $box)
                            <tr>
                                <td>{{ $box->id }}</td>
                                <td>{{ $box->label }}</td>
                                <td>{{ $box->location }}</td>
                                <td>
                                    <a href="{{ route('boxes.edit', $box->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('boxes.destroy', $box->id) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
</div>
