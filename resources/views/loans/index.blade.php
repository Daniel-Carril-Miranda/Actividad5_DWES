<div>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Préstamos</h1>
                <a href="{{ route('loans.create') }}" class="btn btn-primary">Crear nuevo Préstamo</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Item</th>
                            <th>Fecha de Préstamo</th>
                            <th>Fecha de Vencimiento</th>
                            <th>Fecha de Devolución</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($loans as $loan)
                            <tr>
                                <td>{{ $loan->id }}</td>
                                <td>{{ $loan->user->name }}</td>
                                <td>{{ $loan->item->name }}</td>
                                <td>{{ $loan->checkout_date }}</td>
                                <td>{{ $loan->due_date }}</td>
                                <td>{{ $loan->returned_date }}</td>
                                <td>
                                    <a href="{{ route('loans.edit', $loan->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('loans.destroy', $loan->id) }}" method="POST" style="display: inline-block">
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
