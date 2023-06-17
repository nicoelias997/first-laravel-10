@extends('layouts.base')

@section('content')
<div class="container">

    <h1>Notificacion para enviar mail</h1>

    <div class="card text-center">
        <div class="card-header">
            <div class="card-title">Aqui seria el post de la firma</div>
            <div class="card-body">Aqui iria un texto feo</div>
            <div class="card-footer">
                <form action="/notifications" method="POST">
                    @csrf
                    <button class="btn btn-warning" type="submit">Enviar email</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
