<?php

    class TarefaService{

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa){
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        public function inserir(){
            $query = 'insert into tb_tarefas(tarefa)values(:tarefa)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();
        }

        public function recuperar(){
            $query = '
                select 
                    tb_tarefas.id, status, tarefa 
                from tb_tarefas 
                left join 
                    tb_status on tb_status.id = tb_tarefas.id_status
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function atualizar(){
            
        }
        public function remover(){
            
        }
    }

?>