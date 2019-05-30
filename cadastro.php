<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>DDR-Dança de Rua</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Follow us:</p>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="index.html" class="site-logo">
					<img src="./img/logo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
                                            <a href="pagina_login.php">Logar</a> / <a href="cadastro.php">Registrar</a>
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="index.html">Início</a></li>
                                                <li><a href="mostraevento.php">eventos</a>
							
						</li>
						<li><a href="review.html">Praticar</a></li>
						
						<li><a href="contact.html">Contato</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="page-info">
			<h2>Cadastrar</h2>
			<div class="site-breadcrumb">
				<a href="index.html">Início</a>  /
				<span>Cadastrar</span>
			</div>
		</div>
	</section>
     
            <center id="cor_nome"><h2>CRIE SEU CADASTRO</h2></center>
	</div>
</div>
<?php
//if(insset($_SESSION['msg'])){
  //  echo $_SESSION['msg'];
    //unset($_SESSION['msg']);
//}
?>
    <form class="form-horizontal" name="form" method="POST" action="validacd.php">
<fieldset >


  

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput" id="cor_nome">Nome</label>  
  <div class="col-md-4">
  <input id="textinput" name="nome" type="text" placeholder="Insira seu nome completo" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label"  for="textinput" id="cor_nome">E-mail</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" placeholder="Digite seu melhor e-mail" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" name="senha" for="textinput" id="cor_nome">Senha</label>
  <div class="col-md-4">
  <input id="textinput" name="senha" type="password" placeholder="Digite sua senha" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="salvar"  class="btn btn-primary">Confirmar</button>
  </div>
</div>
</footer>
	<!-- Page top end-->

	<!-- parte final-->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-left-pic">
				<img src="" alt="">
			</div>
			<div class="footer-right-pic">
				<img src="" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="./img/logo.png" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="index.html">Início</a></li>
				<li><a href="eventos.html">Eventos</a></li>
				<li><a href="">Praticar</a></li>
				<li><a href="contato.html">Contato</a></li>
				
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="copyright"><a href="">DDR</a> 2019 @ TODOS os direitos reservados</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
