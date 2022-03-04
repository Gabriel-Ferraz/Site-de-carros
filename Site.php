<?php

$nome = $_POST['nome'];

$Sobrenome = $_POST['Sobrenome'];

$Email = $_POST['Email'];

$Senha= $_POST['Senha'];

$Confirmarsenha = $_POST['Confirmarsenha'];

//conectar no banco de dados
$con = new PDO("mysql:host=localhost;dbname=ferrazautoluxoclientes", "root", "");
// inserir no banco de dados
$stmt = $con->prepare("INSERT INTO clientes(nome, sobrenome, Email, Senha, Confirmarsenha) VALUES('$nome','$sobrenome' , '$Email' , 'Senha' , 'Confirmarsenha')");
// executar no banco de dados
	$stmt->execute();


echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Dado Cadastrado Com Sucesso')
window.location.href='index.php';
</SCRIPT>");

?>