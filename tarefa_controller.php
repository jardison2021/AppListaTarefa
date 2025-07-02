<?php
	require "../../app_lista_tarefas/tarefa.model.php";
	require "../../app_lista_tarefas/tarefa.service.php";
	require "../../app_lista_tarefas/conexao.php";
	//instância do objeto tarefa
	$tarefa = new Tarefa();
	$tarefa->__set('tarefa', $_POST['tarefa']);
	//instância de conexão
	$conexao = new Conexao();
	//instância de tarefa service
	$tarefaService = new TarefaService($conexao, $tarefa);
	$tarefaService->inserir();
	//Método header
	header('Location: nova_tarefa.php?inclusao=1');
?>