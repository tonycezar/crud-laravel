@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome do Cliente</td>
          <td>CPF</td>
          <td>RG</td>
          <td>Data da criação</td>
          <td>Data da atualização</td>
          <!-- <td>Usuário responsável pelo cadastro</td>
          <td>Usuário responsável pela atualização</td> -->
          <td>Data de Nascimento</td>
          <td>Telefone</td>
          <td>Local de Nascimento</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->no_cliente}}</td>
            <td>{{$cliente->cpf}}</td>
            <td>{{$cliente->rg}}</td>
            <td>{{$cliente->create_at}}</td>
            <td>{{$cliente->update_at}}</td>
            <!-- <td>{{$cliente->no_usuario.create}}</td>
            <td>{{$cliente->no_usuario.update}}</td> -->
            <td>{{$cliente->data_nascimento}}</td>
            <td>{{$cliente->telefone}}</td>
            <td>{{$cliente->local_nascimento}}</td>
            <td><a href="{{ route('clientes.edit', $cliente->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('clientes.destroy', $cliente->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Desativar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
