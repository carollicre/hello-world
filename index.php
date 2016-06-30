<?php
	session_start();
	$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>The voice</title>

   	<!-- Bootstrap -->
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
  		body {
        	font: 400 15px Lato, sans-serif;
        	line-height: 1.8;
        	color: #818181;
			background-image: url("Imagens/music3.jpg");
			text-align:center;
  		}
		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
			width: 80%;
			margin: auto;
		}
		.bg-blue {
        	background-color: #0080C0;
        }
		label {
			color: #fff;
			display:inline-block;
			max-width:100%;
			margin-bottom:5px;
			font-weight:700
        }
		h1 {
			font-family: Verdana;
			font-size: 20px;
			color: #FFF;
			font-weight: 500;
			line-height:1.1;		
        }
		h2 {
			font-family:inherit;
			font-size: 16px;
			color: #FFF;
			font-weight: 500;
			line-height:1.1;		
        }
		h3 {
			font-family:inherit;
			font-size: 10px;
			color: #FFF;	
			line-height:1.1;
        }
		h4 {
			font-family:inherit;
			font-size: 9px;
			color: #FFF;
			line-height:1.1;	
        }
		.navbar {
			 margin-bottom: 0;
			 background-color: #fff;
			 z-index: 9999;
			 border: 0;
			 font-size: 12px !important;
			 line-height: 1.42857143 !important;
			 letter-spacing: 4px;
			 border-radius: 0;
			 font-family: Montserrat, sans-serif;
	    }
        .navbar li a, .navbar .navbar-brand {
        color: #0080C0 !important;
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #fff !important;
        background-color: #0080C0 !important;
        }
        .navbar-toggle{
			position:relative;
			float:right;
			padding:9px 10px;
			margin-top:8px;
			margin-right:15px;
			margin-bottom:8px;
			background-color:transparent;
			background-image:none;
			border:1px solid transparent;
			border-radius:4px;
			border-color:#0080C0;
		}
		.navbar-toggle:focus{outline:0}
		.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}
		.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}
		@media (min-width:768px){.navbar-toggle{display:none}}.

		
		.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#FFF}
		.navbar-default .navbar-toggle .icon-bar{background-color:#fff}
		
		.btn-chatinho{
			color: #0080C0;
			background-color: #FFF;
			border-color:#0080C0;
			}
		.btn-chatinho:focus{
			color:#0080C0;
			background-color:#fff;
			border-color:#0080C0;
			}
		.btn-chatinho:hover{
			color:#fff;
			background-color:#0080C0;
			border-color:#fff;
		}
		.footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 60px;
			text-align:center;						 
		}
			
  	</style>
    
</head>
  
<body> 
<!-- Início do Código -->
	<!--Criando Menu de navegação -->   
	<nav class="navbar navbar-default">
		<div class="container-fluid">
        	<div class="navbar-header">                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar" style="background-color:#000;"></span>
                    <span class="icon-bar" style="background-color:#000;"></span>
                    <span class="icon-bar" style="background-color:#000;"></span>
    			</button>
                <a class="navbar-brand">The Voice IASD</a>
        	</div> <!--/.navbar-header -->
        	<div class="collapse navbar-collapse" id="mynavbar">    
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li><a href="inscricoes.php">Incrições</a></li>
                    <li><a href="regulamento.php">Regulamento</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <?php
						if ($user != "") {
						echo "<li><a href='visu-tabela.php'><u>LISTA DE INSCRITOS</u></a></li>";	
						}
					?>  
					                                       
                </ul>            
                
                <!-- Menu de Login -->
                <ul class="nav navbar-nav navbar-right">
                    <?php
						if ($user != "") {
						echo "<li><a href='logoff.php'><span class='glyphicon glyphicon-user'></span>Sair</a></li>";	
						} else {
						echo "<li><a href='login.php'><span class='glyphicon glyphicon-user'></span>Administração</a></li>";
						}
					?>
                    
                </ul>                
    			<!-- Fim do Menu de Login -->
                
        	</div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <!--Fim do Menu de Navegação -->
        
    <!-- Quebra de Linha -->
    <br>
    <!-- -->

	<!-- Conteiner -->
    <div class="container">
        <div class="row">        
        	<!--<div class="col-xs-12 col-sm-6 col-md-1"></div>-->
            <div class="col-xs-12 col-sm-6 col-md-10" >
              <div class="container">
                
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                  </ol>
              
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="Imagens/bg.jpg" alt="Chania">
                    </div>              
                    <div class="item">
                      <img src="Imagens/bg1.jpg" alt="Chania">
                    </div>
                  </div><!--/.div carousel-inner -->
              
                </div><!--/.div myCarousel -->                
              </div><!--/.div container -->
				
				
         	</div><!--/.colunacentral -->         
         	<div class="col-xs-12 col-sm-6 col-md-1"></div>         
         </div><!--/.div row -->
     </div><!--/.div container -->
	<footer class="footer">    
    	<h3>"Porque, se vivemos, para o Senhor vivemos; se morremos, para o Senhor morremos. De sorte que, ou vivamos ou morramos, somos do Senhor." Rom. 14:8. </h3>
	    <h4>Web Site Desenvolvido por: © 2016 Licre Labs <a href="mailto:licrelabs@gmail.com">
          <span class="glyphicon glyphicon-envelope" style="color:#fff"></span>
        </a></h4>                
	</footer><!--/.footer -->
<!-- Fim do Código -->    

  	<!-- Bootstrap JavaScript
    ================================================== -->
    <!-- Adicionado ao final para a pagina ser carregada mais rapido -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.6/docs/dist/js/bootstrap.min.js"></script>    
            
  </body>
</html>