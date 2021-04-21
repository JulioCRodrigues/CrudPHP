@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar Usuário</h1>

    <div class="col-8 m-auto">
        <form name="=FormCad" id="formCad" method="POST" action="{{url('users')}}">

        @csrf 
        <input type="text " name="name" placeholder="Nome completo" class="form-control">
        <input type="text " name="email" placeholder="Digite seu email" class="form-control">
        <input type="password " name="password" placeholder="Digite sua senha" class="form-control">
        <input type="submit" value="Cadastrar" class="btn btn-primary">


        </form>
    </div>
@endsection