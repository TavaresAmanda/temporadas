<?php
include("php/conexao.php");
// Verifica se um formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	$email = (isset($_POST['email'])) ? $_POST['email'] : '';
	$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';

	if (validaUsuario($usuario, $senha) == true) 
	{
		header("Location: index.php");
	}
	else
	{
		echo "<h1> EMAIL OU SENHA INCORRETOS</h1>";
		expulsaVisitante();
	}
}
?>