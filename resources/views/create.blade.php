@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar Usuário</h1>

<div class="col-8 m-auto">
    <form name="=FormCad" id="formCad" method="POST" action="{{url('users')}}">

        @csrf
        <h6><label>Nome completo: </label></h6>
        <input type="text " name="name" placeholder="Nome completo" class="form-control" required></br>

        <h6><label>Email: </label></h6>
        <input type="email" name="email" placeholder="Digite seu email" class="form-control" required></br>

        <h6><label>Senha: </label></h6>
        <input type="password" name="password" class="form-control"  placeholder="Senha" required></br>

        <div class="text-center">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </div>


    </form>
</div>
@endsection