<?php
  include("php/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<title>Temporadas</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: false, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(
    function () {
        $('.carousel1').carouFredSel({
            auto: false,
            prev: '.prev1',
            next: '.next1',
            width: 1030,
            items: {
                visible: {
                    min: 1,
                    max: 4
                },
                height: 'auto',
                width: 157,
            },
            responsive: true,
            scroll: 1,
            mousewheel: false,
            swipe: {
                onMouse: true,
                onTouch: true
            }
        });
    });
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
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
            <li class="current"><a href="index.php">Página Inicial</a></li>
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
            <li><a href="painelControle.php">Painel de Controle</a></li>
            <li><a href="contatos.php">Contatos</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="slider-relative">
  <div class="slider-block">
    <div class="slider"> <a href="#" class="prev"></a> <a href="#" class="next"></a>
      <ul class="items">
        <li> <img src="images/slide.jpg" alt="">
          <div class="banner">Bem Vindos<br>
            <br>
            Temporada!
              </div>
        </li>
        <li> <img src="images/slide1.jpg" alt="">
          <div class="banner">Faça novas amizades <br>
            <br>
            diversão em família</div>
        </li>
        <li> <img src="images/slide2.jpg" alt="">
          <div class="banner">Viaje sem hotel e<br>
            <br>
            sem gastar nada!</div>
        </li>
        <li> <img src="images/slide3.jpg" alt="">
          <div class="banner">Prestação de Serviços! <br>
            <br>
            Gráficas, Programadores, Construtores...</div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="content">
  <div class="black">
    <div class="page1_block">
      <div class="container_12">
        <div class="grid_12">
          <h2>Conheça o Temporadas!<br>
            <br>
            <br>
            Sua rede social para imóveis</h2>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="container_12">
      <div class="grid_3">
        <h3>Imóveis</h3>
        <div class="col1">O Temporadas oferece uma disponíbilidade enorme de imóveis
        em praias, lagos, fazendas... Com locais maravilhosas em todos os cantos do
        do Brasil! No Temporadas você não precisa gastar dinheiro com hotel ou aluguel.</div>
        <a href="procurar.php" class="btn">Mais</a> </div>
      <div class="grid_3">
        <h3>Serviços</h3>
        <div class="col1">Se você deseja algum tipo serviço, tal como, Artes Gráficas, desenvolvedores, consultores, corretores... No Temporadas agora tem! Use suas moedas
        para pedir algum serviço no Temporadas! </div>
        <a href="procurar.php" class="btn">Mais</a> </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="white">
    <div class="container_12">
      <div class="grid_7">
        <h3>Moedas</h3>
        <img src="images/page1_img1.png" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <div class="text1"> Use a moeda do Temporadas! </div>
          Doe seu imóvel ou serviço por algum tempo para alguém no Temporadas para ganhar Moedas.
          Com mais Moedas você pode abrir seu leque de possibilidades.
          Saiba mais sobre o funcionamento do Temporadas clicando em Mais <br>
          <a href="sobre.php" class="btn">Mais</a> </div>
      </div>
      <div class="grid_4 prefix_1">
        <h3>Mais Populares</h3>
        <img src="images/page1_img2.jpg" alt="" class="img_inner fleft i1">
        <div class="extra_wrapper">
          <div class="col1"> <a href="#">Casa em Lucena bem Localizada.</a> </div>
          Casa de fulano de tal. </div>
        <div class="clear cl1"></div>
        <img src="images/page1_img3.jpg" alt="" class="img_inner fleft i1">
        <div class="extra_wrapper">
          <div class="col1"> <a href="#">Casa na Penha. Vista para o Mar</a> </div>
          Casa de sicrano de tal. </div>
        <div class="clear cl2"></div>
        <img src="images/page1_img4.jpg" alt="" class="img_inner fleft i1">
        <div class="extra_wrapper">
          <div class="col1 "> <a href="#"> Casa em Valentina.</a> </div>
          Casa de sicrano de tal. </div>
        <div class="clear"></div>
        <a href="#" class="btn">Mais</a> </div>
      <div class="clear"></div>
    </div>
  </div>  
</div>
<footer>
  <div class="container_12">
    <div class="grid_2">
      <div class="copy"> <a href="index.php" class="footer_logo"><img src="images/footer_logo.png"	alt=""></a> &copy; 2014 <a href="#">Privacy Policy</a> </div>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="contatos.php">Contato</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="sobre.php">Legislação</a></li>
        <li><a href="sobre.php">Termos e Condições</a></li>
        <li><a href="contatos.php">Sobre Nós</a></li>
      </ul>
    </div>
    
    <div id="grid_3prefix_1">
      <h4>Cadastre seu E-mail</h4>
      <form id="newsletter" action="login.php">
        <div class="success">Seu pedido de cadastro foi enviado!</div>
        <label class="email"> <span>Entre com seu E-mail:</span>
          <input type="email" value="" >
          <a href="login.php" class="btn" data-type="submit">Inscreva-se</a> <span class="error">*E-mail inválido.</span> </label>
      </form>
    </div>
    <div class="clear"></div>
  </div>
  <div class="f_bot">
  </div>
</footer>
</body>
</html>