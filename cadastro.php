<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Temporadas | Cadastro</title>
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico">
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.1.1.js"></script>
  <script src="js/superfish.js"></script>
  <script src="js/sForm.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/tms-0.4.1.js"></script>
  <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
  <script src="js/jquery.touchSwipe.min.js"></script>
</head>
<body class="page1">
  <header>
    <div class="container_12">
      <div class="grid_12">
        <div class="h_phone">Alguma ajuda? Ligue para (83) 81014213</div>
        <h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="menu_block">
      <div class="container_12">
        <div class="grid_12">
          <div class="socials"><a href="login.php"></a><a href="login.php"></a></div>
          <div class="autor">
            <a href="login.php"> Entrar </a> Social </div>
            <nav class="">
              <ul class="sf-menu">
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="services.php">Aluguel</a>
                  <ul>
                    <li><a href="disponibilizar.php">Disponibilizar</a>
                      <ul>
                        <li><a href="disponibilizar.php">Casa</a></li>
                        <li><a href="disponibilizar.php">Apartamento</a></li>
                        <li><a href="disponibilizar.php">Recurso</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Editar</a></li>
                    <li><a href="#">Remover</a></li>
                  </ul>
                </li>
                <li><a href="procurar.php">Procurar</a>
                  <ul>
                    <li><a href="procurar.php">Casa</a>
                      <li><a href="procurar.php">Apartamento</a></li>
                      <li><a href="procurar.php">Recurso</a></li>
                    </ul>
                  </li>
                </li>
                <li class="current"><a href="painelControle.php">Painel de Controle</a></li>
                <li><a href="contatos.php">Contatos</a></li>
              </ul>
            </nav>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </header>
    <div class="content">
      <div class="black">
        <div class="page1_block">
          <div class="container_12">
            <div class="grid_12">
              <div id="container">
              <form id="slick-login" name="form1" method="post" action="salvar.php">
                  Nome:<input name="nome" type="text" id="nome" maxlength="45" class="placeholder" />
                  Email:<input name="email" type="text" id="email" maxlength="64" class="placeholder" />
                  Cidade:<input name="cidade" type="text" id="cidade" maxlength="45" class="placeholder" />
                  Estado:<select name="estados" id="estados" class="placeholder" >     
                  Login:<input name="login" type="text" id="login" maxlength="40" class="placeholder"/>
                  Senha:<input name="senha" type="password" id="senha" maxlength="10" class="placeholder" />
                  <input type="submit" name="Submit" value="Salvar" style="cursor:pointer;"/>
                </form>
              </div>
              <div class="clear"></div>
            </div>
          </div>
          <footer>
            <div class="container_12">
              <div class="grid_2">
                <div class="copy"> <a href="index.html" class="footer_logo"><img src="images/footer_logo.png" alt=""></a> &copy; 2014 <a href="#">Privacy Policy</a> </div>
              </div>
              <div class="grid_2">
                <ul>
                  <li><a href="#">Contato</a></li>
                  <li><a href="#">Sobre</a></li>
                  <li><a href="#">Legislação</a></li>
                  <li><a href="#">Termos e Condições</a></li>
                  <li><a href="#">Sobre Nós</a></li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </footer>
        </body>
        </html>