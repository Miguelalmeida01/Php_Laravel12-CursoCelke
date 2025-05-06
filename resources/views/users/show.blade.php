@extends('layouts.admin')

@section('content')
<div class="card mt-4 mb-4 border-light shadow">
    <div class="card-header hstack gap-2 ">
        <span>Visualizar Usuário</span>
        <span class="ms-auto">
            <a href="{{ route('user.index') }}" class="btn btn-info btn-sm">Listar</a>
        </span>
    </div>

    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">ID</dt>
            <dd class="col-sm-9">1</dd>

            <dt class="col-sm-3">Nome</dt>
            <dd class="col-sm-9">Cesar</dd> 

            <dt class="col-sm-3">E-mail</dt>
            <dd class="col-sm-9">Cesar@gmail.com</dd>

            <dt class="col-sm-3">Cadastrado</dt>
            <dd class="col-sm-9">02/05/2025 22:03:50</dd>

            <dt class="col-sm-3">Editado</dt>
            <dd class="col-sm-9">02/05/2025 22:03:50</dd>
        </dl>
    </div>
</div>

@endsection