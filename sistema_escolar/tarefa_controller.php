<?php

    require "../../sistema_escolar/tarefa.model.php";
    require "../../sistema_escolar/tarefa.service.php";
    require "../../sistema_escolar/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'inserir'){
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);
    
        if(trim($_POST['tarefa']) != ''){
            $conexao = new Conexao();
    
            $tarefaService = new TarefaService($conexao, $tarefa);
            $tarefaService->inserir();
    
            header('Location: nova_tarefa.php?inclusao=1');
        }else{
            header('Location: nova_tarefa.php?inclusao=2');
        }
    }else if ($acao == 'recuperar'){
        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperar();
    }
    
?>