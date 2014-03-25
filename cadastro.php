<?php
//Verifico se o arquivo existe
if(file_exists("init.php")) {
	require "init.php";		
} else {
	echo "Arquivo init.php nao foi encontrado";
	exit;
}
//verifico se a função que eu criei existe, vai que alguem pegou meu script e apagou ela = )
if(!function_exists("Abre_Conexao")) {
	echo "Erro o arquivo init.php foi auterado, nao existe a função Abre_Conexao";
	exit;
}

Abre_Conexao();
//verifico se nao deu erro de mysql
if(mysql_errno() != 0) {
                //verifico se a $errros existe, mesma coisa vai que alguem meche no script e apagou ela
	if(!isset($erros)) {
		echo "Erro o arquivo init.php foi auterado, nao existe \$erros";
		exit;
	}
	echo $erros[mysql_errno()];
	exit;
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Cadastro</title>
  <style>
    <!--
    .textBox { border:1px solid gray; width:200px;} 
  -->
</style>
</head>
<body>
  <header>
    <div class="container_12">
      <div class="grid_12">
        <div class="h_phone">Alguma ajuda? Ligue para (83) 81014213</div>
        <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="menu_block">
      <div class="container_12">
        <div class="grid_12">
          <div class="socials"><a href="login.html"></a><a href="login.html"></a></div>
          <div class="autor"> <a href="login.html">Entrar</a> Social </div>
          <nav class="">
            <ul class="sf-menu">
              <li class="current"><a href="index.html">Página Inicial</a></li>
              <li><a href="services.html">Aluguel</a>
                <ul>
                  <li><a href="#">Disponibilizar</a>
                    <ul>
                      <li><a href="#">Casa</a></li>
                      <li><a href="#">Apartamento</a></li>
                      <li><a href="#">Recurso</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Editar</a></li>
                  <li><a href="#">Remover</a></li>
                </ul>
              </li>
              <li><a href="products.html">Procurar</a>
                <ul>
                  <li><a href="#">Casa</a>
                    <li><a href="#">Apartamento</a></li>
                    <li><a href="#">Recurso</a></li>
                  </ul>
                </li>
              </li>
              <li><a href="blog.html">Painel de Controle</a></li>
              <li><a href="contatos.html">Contatos</a></li>
            </ul>
          </nav>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </header>
  <form id="form1" name="form1" method="post" action="salvar.php">
    <table width="400" border="0" align="center">
      <tr>
        <td width="145">Nome</td>
        <td width="245"><input name="nome" type="text" id="nome" maxlength="45" class="textBox" /></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input name="email" type="text" id="email" maxlength="64" class="textBox" /></td>
      </tr>
      <tr>
        <td>Cidade</td>
        <td><input name="cidade" type="text" id="cidade" maxlength="45" class="textBox" /></td>
      </tr>
      <tr>
        <td>Estado</td>
        <td><select name="estados" id="estados" class="textBox" >	  	
        </tr>
        <tr>
          <td>Login</td>
          <td><input name="login" type="text" id="login" maxlength="40" class="textBox" /></td>
        </tr>
        <tr>
          <td>Senha</td>
          <td><input name="senha" type="password" id="senha" maxlength="10" class="textBox" /></td>
        </tr>
        <tr>
          <td> </td>
          <td><input type="submit" name="Submit" value="Salvar" style="cursor:pointer;" /></td>
        </tr>
      </table>
    </form>
  </body>
  </html></div>