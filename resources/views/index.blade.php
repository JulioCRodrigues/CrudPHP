@extends('templates.template')

@section('content')
    <h1 class="text-center">CRUD</h1></br>

    <div class="text-center">
      <a href="{{url('users/create')}}">
        <button class="btn btn-success">Cadastrar</button>
      </a>
    </div></br>

    <div class="col-8 m-auto">
    <table class="table text-center">
  
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>
  <tbody>

    @foreach($user as $users)

    <tr>
      <th scope="row">{{$users -> id}}</th>
      <td>{{$users-> name}}</td>
      <td>{{$users -> email}}</td>
      <td>***</td>
      <td>

        <a href="">
            <button class="btn btn-warning">Editar</button>
        </a>

        <a href="">
            <button class="btn btn-danger">Deletar</button>
        </a>
      </td>
    </tr>

    @endforeach
    
  </tbody>
</table>
    </div>
@endsection()