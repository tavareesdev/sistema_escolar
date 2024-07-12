<?php
	$acao = 'recuperar';
	require 'tarefa_controler.php';
?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lista Tarefas do Tavares</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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

		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<!-- <li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li> -->
						<li class="list-group-item"><a href="index.php">Nova tarefa</a></li>
						<li class="list-group-item active"><a href="#">Painel de Alunos</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Painel de Alunos</h4>
								<hr />
								<table class="table">
									<thead>
										<tr>
											<th scope="col">Nome</th>
											<th scope="col">Sobrenome</th>
											<th scope="col">Data de Nascimento</th>
											<th scope="col">Data de MTR</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($tarefas as $indice => $tarefa): ?>
										<tr>
											<td><?= $tarefa['nome'] ?></td>
											<td><?= $tarefa['sobrenome'] ?></td>
											<td><?= formatarData($tarefa['data_nasc']) ?></td>
											<td><?= formatarData($tarefa['data_mtr']) ?></td>
										</tr>
									<?php endforeach; ?>
									<?php
									// Função para formatar a data
									function formatarData($data) {
										// Verifica se a data não está vazia
										if (!empty($data)) {
											// Cria um objeto DateTime a partir da string da data
											$date = new DateTime($data);
											// Formata a data no formato desejado (d/m/Y)
											return $date->format('d/m/Y');
										} else {
											return ''; // Retorna vazio se a data estiver vazia
										}
									}
									?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>