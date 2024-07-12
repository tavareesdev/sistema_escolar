<?php

    class TarefaService{

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa){
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        public function inserir(){
            $query = 'insert into tabela_aluno(
                nome,
                sobrenome,
                data_nasc,
                telefone,
                data_mtr
            )values(
                :nome,
                :sobrenome,
                :data_nasc,
                :celular,
                :data_mtr
                )';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nome', $this->tarefa->__get('nome'));
            $stmt->bindValue(':sobrenome', $this->tarefa->__get('sobrenome'));
            $stmt->bindValue(':data_nasc', $this->tarefa->__get('data_nasc'));
            $stmt->bindValue(':celular', $this->tarefa->__get('celular'));
            $current_date = date('Y-m-d');
            $stmt->bindValue(':data_mtr', $current_date);
            $stmt->execute();
        }

        public function recuperar(){
            $query = '
                select 
                    * 
                from tabela_aluno
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