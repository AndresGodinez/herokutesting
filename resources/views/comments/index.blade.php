@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Mensajes
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <td>id</td>
                            <td>Nombre</td>
                            <td>Teléfono</td>
                            <td>Mensaje</td>
                            <td>Fecha</td>
                        </tr>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->name }}</td>
                                <td>{{ $comment->telephone }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>{{ $comment->created_at->format('H:m d-m-Y') }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
