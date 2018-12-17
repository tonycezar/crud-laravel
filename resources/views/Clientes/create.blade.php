@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h3>Adicionar cliente<h3>
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
      <form method="post" action="{{ route('clientes.store') }}">
          <div class="form-group">
              @csrf
              <label for="no_cliente">Nome do cliente:</label>
              <input type="text" class="form-control" name="no_cliente"/>
          </div>
          <div class="form-group">
              <label for="cpf">CPF:</label>
              <input type="text" class="form-control" name="cpf"/>
          </div>
          <div class="form-group">
              <label for="rg">RG:</label>
              <input type="text" class="form-control" name="rg"/>
          </div>
          <div class="form-group">
              <label for="data_nascimento">Data de Nascimento:</label>
              <input type="date" class="form-control" name="data_nascimento"/>
          </div>
          <div class="form-group">
              <label for="telefone">Telefone:</label>
              <input type="phone" class="form-control" name="telefone"/>
          </div>
          <div class="form-group">
            <form>
              <label for="local_nascimento">Local de Nascimento:</label><br>
              <input type="radio" name="BA" value="BA" checked>BA<br>
              <input type="radio" name="SP" value="SP">SP
            </form>
          </div>
          <button type="submit" class="btn btn-primary">Adicionar</button>
      </form>
  </div>
</div>
@endsection
