@extends('template')
@section('conteudo')
	<h1 class="display-4">Cadastro de Clientes</h1>
	<form method="post" action="{{ route('usuario_novo')}}">@csrf
		<div class="input-group">
  			<div class="input-group-prepend">
    		<span class="input-group-text">Nome</span>
    		<input type="text" name="nome" placeholder="Nome">
  		</div>

		<div class="input-group">
  			<div class="input-group-prepend">
    		<span class="input-group-text">Endereço</span>
    		<input type="text" name="endereco" placeholder="Endereco">
  		</div>

		<div class="input-group">
  			<div class="input-group-prepend">
    		<span class="input-group-text">CEP</span>
    		<input type="text" name="cep" placeholder="CEP">
  		</div>
		
		<div class="input-group">
  			<div class="input-group-prepend">
    		<span class="input-group-text">Cidade</span>
    		<input type="text" name="cidade" placeholder="Cidade">
  		</div>
		
		<div class="input-group">
  			<div class="input-group-prepend">
    		<span class="input-group-text">Estado</span>
    		<select name="estado">
				<option value="AC">Acre</option>
				<option value="AL">Alagoas</option>
				<option value="AP">Amapá</option>
				<option value="AM">Amazonas</option>
				<option value="BA">Bahia</option>
				<option value="CE">Ceará</option>
				<option value="DF">Distrito Federal</option>
				<option value="ES">Espírito Santo</option>
				<option value="GO">Goiás</option>
				<option value="MA">Maranhão</option>
				<option value="MT">Mato Grosso</option>
				<option value="MS">Mato Grosso do Sul</option>
				<option value="MG">Minas Gerais</option>
				<option value="PA">Pará</option>
				<option value="PB">Paraíba</option>
				<option value="PR">Paraná</option>
				<option value="PE">Pernambuco</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RN">Rio Grande do Norte</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina</option>
				<option value="SP">São Paulo</option>
				<option value="SE">Sergipe</option>
				<option value="TO">Tocantins</option>
			</select>
  		</div>
  		
  		<div class="form group col-md-12 mt-1">
			<input type="submit" class="btn btn-primary" value="Enviar">
		</div>

	</form>
@endsection