<?php
	require "../../app_lista_tarefas/tarefa.model.php";
	require "../../app_lista_tarefas/tarefa.service.php";
	require "../../app_lista_tarefas/conexao.php";
	//teste
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	//instância do objeto tarefa
	$tarefa = new Tarefa();
	$tarefa->__set('tarefa', $_POST['tarefa']);
	//instância de conexão
	$conexao = new Conexao();
	//instância de tarefa service
	$tarefaService = new TarefaService($conexao, $tarefa);
	$tarefaService->inserir();
	echo '<pre>';
	print_r($tarefaService);
	echo '</pre>';
?>