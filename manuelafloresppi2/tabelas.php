<?php

function select_cidades() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tb_cidades");
	$sth->execute();
	return $sth->fetchAll();
}

function select_cardapio() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tb_cardapio");
	$sth->execute();
	return $sth->fetchAll();
}

function select_dados() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tb_dados, tb_cardapio, tb_cidades WHERE tb_dados.cardapio_dados = tb_cardapio.id_cardapio AND tb_dados.cidade_dados = tb_cidades.id_cidades;");
	$sth->execute();
	return $sth->fetchAll();
}

function insert_dados() {
	global $conn;
	$sth = $conn->prepare("INSERT INTO tb_dados (nome_dados, email_dados, cardapio_dados, data_dados, cidade_dados, promocoes_dados, obs_dados) VALUES (:nome, :email, :cardapio, :data, :cidade, :promocoes, :obs)");
	$sth->bindValue(':nome', $_POST['nome']);
	$sth->bindValue(':email', $_POST['email']);
	$sth->bindValue(':cardapio', $_POST['favorito']);
	$sth->bindValue(':data', $_POST['aniver']);
	$sth->bindValue(':cidade', $_POST['cidade']);
	$sth->bindValue(':promocoes', $_POST['aceito']);
	$sth->bindValue(':obs', $_POST['obs']);
	$sth->execute();
	return $sth->fetchAll();
}

function delete_dados() {
	global $conn;
	$sth = $conn->prepare("DELETE FROM tb_dados WHERE id_dados = :id");
	$sth->bindValue(':id', $_POST['id_dados']);
	$sth->execute();
	return $sth->fetchAll();
}

?>
