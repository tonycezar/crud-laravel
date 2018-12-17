@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h3>Editar Cliente<h3>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('clientes.update', $cliente->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="no_cliente">Nome do cliente:</label>
          <input type="text" class="form-control" name="no_cliente" value={{ $cliente->no_cliente }} />
        </div>
        <div class="form-group">
          <label for="email">CPF:</label>
          <input type="text" class="form-control" name="email" value={{ $cliente->cpf }} />
        </div>
        <div class="form-group">
          <label for="senha">RG:</label>
          <input type="text" class="form-control" name="rg" value={{ $cliente->rg }} />
        </div>
        <div class="form-group">
          <label for="senha">Data/hora de cadastro:</label>
          <input type="text" class="form-control" name="create_at" value={{ $cliente->create_at }} />
        </div>
        <div class="form-group">
          <label for="senha">Data/hora de atualização:</label>
          <input type="text" class="form-control" name="update_at" value={{ $cliente->update_at }} />
        </div>
        <div class="form-group">
          <label for="senha">Login do usuário cadastrante:</label>
          <input type="text" class="form-control" name="no_usuario" value={{ $cliente->no_usuario }} />
        </div>
        <div class="form-group">
          <label for="senha">Data de Nascimento:</label>
          <input type="text" class="form-control" name="local_nascimento " value={{ $cliente->local_nascimento }} />
        </div>
        <div class="form-group">
          <label for="senha">Telefone:</label>
          <input type="text" class="form-control" name="telefone" value={{ $cliente->telefone }} />
        </div>
        <div class="form-group">
          <label for="senha">Local de Nascimento:</label>
          <input type="text" class="form-control" name="local_nascimento" value={{ $cliente->local_nascimento }} />
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
  </div>
</div>
@endsection
