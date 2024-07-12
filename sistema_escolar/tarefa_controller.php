<?php

    require "../sistema_escolar/tarefa.model.php";
    require "../sistema_escolar/tarefa.service.php";
    require "../sistema_escolar/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'inserir'){
        $tarefa = new Tarefa();
        $tarefa->__set('nome', $_POST['nome']);
        $tarefa->__set('sobrenome', $_POST['sobrenome']);
        $tarefa->__set('data_nasc', $_POST['data_nasc']);
        $tarefa->__set('celular', $_POST['celular']);

        $conexao = new Conexao();
    
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();
        
        header('Location: index.php?inclusao=1');

        // if(trim($_POST['tarefa']) != ''){
        //     $conexao = new Conexao();
    
        //     $tarefaService = new TarefaService($conexao, $tarefa);
        //     $tarefaService->inserir();
    
        //     header('Location: index.php?inclusao=1');
        // }else{
        //     header('Location: index.php?inclusao=2');
        // }
    }else if ($acao == 'recuperar'){
        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperar();
    }
    
?>