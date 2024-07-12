<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lista Tarefas do Tavares</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/easyLogo.png" width="110" height="40" class="d-inline-block align-top" alt="">
					Painel de Alunos
				</a>
			</div>
		</nav>

		
		<script>
			<?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
				Swal.fire(
					'Sucesso!',
					'Aluno(a) cadastrado(a) com sucesso!',
					'success'
				)
			<?php }else if( isset($_GET['inclusao']) && $_GET['inclusao'] == 2 ) {?>
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'É necessário preencher o campo para cadastrar uma tarefa.'
				})
			<?php } ?>
		</script>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<!-- <li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li> -->
						<li class="list-group-item active"><a href="#">Novo Aluno</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Painel de Alunos</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Novo Aluno</h4>
								<hr />
								<form method="post" action="tarefa_controler.php?acao=inserir">
									<div class="row">
										<div class="col-md-3">
											<label>Nome do Aluno:</label>
											<input type="text" class="form-control" name="nome">
										</div>
										<div class="col-md-9">
											<label>Sobrenome do Aluno:</label>
											<input type="text" class="form-control" name="sobrenome">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-4">
											<label>Data de Nascimento do Aluno:</label>
											<input type="date" class="form-control" name="data_nasc">
										</div>
										<div class="col-md-8">
											<label>Celular do Aluno:</label>
											<input type="text" class="form-control" name="celular">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-3">
											<label>Nome do Responsável:</label>
											<input type="text" class="form-control" name="nome_resp">
										</div>
										<div class="col-md-9">
											<label>Sobrenome do Responsável:</label>
											<input type="text" class="form-control" name="sobrenome_resp">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-5">
											<label>Data de Nascimento do Responsável:</label>
											<input type="date" class="form-control" name="data_nasc_resp">
										</div>
										<div class="col-md-7">
											<label>Celular do Responsável:</label>
											<input type="text" class="form-control" name="celular_resp">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-3">
											<label>CPF do Responsável:</label>
											<input type="text" class="form-control" name="cpf_resp">
										</div>
										<div class="col-md-3">
											<label>RG do Responsável:</label>
											<input type="text" class="form-control" name="rg_resp">
										</div>
										<div class="col-md-3">
											<label>CEP:</label>
											<input type="text" class="form-control" name="cep">
										</div>
										<div class="col-md-3">
											<label>Número:</label>
											<input type="text" class="form-control" name="numero">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-6">
											<label>Endereço:</label>
											<input type="text" class="form-control" name="endereco">
										</div>
										<div class="col-md-6">
											<label>Complemento:</label>
											<input type="text" class="form-control" name="complemento">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-3">
											<button class="btn btn-success">Cadastrar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>