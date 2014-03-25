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
  <form id="form1" name="form1" method="post" action="salvar_edicao.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <table width="400" border="0" align="center">
      <tr>
        <td>Email</td>
        <td><input name="email" type="text" id="email" maxlength="64" class="textBox" value="<?php echo $dados["email"]; ?>" /></td>
      </tr>
    </td>
  </tr>
  <tr>
    <td>Cidade</td>
    <td><input name="cidade" type="text" id="cidade" maxlength="45" class="textBox" /></td>
  </tr>
  <tr>
    <td>Estado</td>
    <td><select name="estados" id="estados" class="textBox" ></select></td>
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
</html>