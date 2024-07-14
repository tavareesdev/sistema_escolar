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
                nome_resp,
                sobrenome_resp,
                data_nasc_resp,
                telefone_resp,
                cpf_resp,
                rg_resp,
                cep,
                numero,
                endereco,
                complemento,
                data_mtr
            )values(
                :nome,
                :sobrenome,
                :data_nasc,
                :celular,
                :nome_resp,
                :sobrenome_resp,
                :data_nasc_resp,
                :celular_resp,
                :cpf_resp,
                :rg_resp,
                :cep,
                :numero,
                :endereco,
                :complemento,
                :data_mtr
                )';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nome', $this->tarefa->__get('nome'));
            $stmt->bindValue(':sobrenome', $this->tarefa->__get('sobrenome'));
            $stmt->bindValue(':data_nasc', $this->tarefa->__get('data_nasc'));
            $stmt->bindValue(':celular', $this->tarefa->__get('celular'));
            $stmt->bindValue(':nome_resp', $this->tarefa->__get('nome_resp'));
            $stmt->bindValue(':sobrenome_resp', $this->tarefa->__get('sobrenome_resp'));
            $stmt->bindValue(':data_nasc_resp', $this->tarefa->__get('data_nasc_resp'));
            $stmt->bindValue(':celular_resp', $this->tarefa->__get('celular_resp'));
            $stmt->bindValue(':cpf_resp', $this->tarefa->__get('cpf_resp'));
            $stmt->bindValue(':rg_resp', $this->tarefa->__get('rg_resp'));
            $stmt->bindValue(':cep', $this->tarefa->__get('cep'));
            $stmt->bindValue(':numero', $this->tarefa->__get('numero'));
            $stmt->bindValue(':endereco', $this->tarefa->__get('endereco'));
            $stmt->bindValue(':complemento', $this->tarefa->__get('complemento'));
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