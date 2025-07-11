<?php
	//CRUD
	class TarefaService{
		private $conexao;
		private $tarefa;
		public function __construct(Conexao $conexao, Tarefa $tarefa){
			$this->conexao = $conexao->conectar();
			$this->tarefa = $tarefa;
		}
		public function inserir(){//CREATE
			$query = 'insert into tb_tarefas(tarefa)values(:tarefa)';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
			$stmt->execute();
		}
		public function recuperar(){//READ

		}
		public function atualizar(){//UPDATE

		}
		public function remover(){//DELETE

		}
	}
?>