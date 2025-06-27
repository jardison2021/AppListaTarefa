<?php
	class Tarefa{
		//métodos privados
		private $id;
		private $id_status;
		private $tarefa;
		private $data_cadastro;
		//método públicos
		public function __get($atributo){
			return $this->$atributo;
		}
		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}
	}
?>