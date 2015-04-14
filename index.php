<?php
	//session_start();
	$con = mysqli_connect("localhost", "root", "root","amicao") or print (mysql_error()); 
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<link rel="shortcut icon" href="css/images/icon.png" type="image/x-icon"/>

		<title> Amicão </title>
	</head>

	<body>
		<div class="geral">
			<div class="topDiv" id="div1">
				<div class="oitenta">	
					<div class="sky">
						<span class="fa fa-cloud wow shake" data-wow-iteration="infinite" data-wow-duration="4000ms" style="margin-left:30px; font-size:100px; float:left;"></span>
						<span class="fa fa-cloud wow shake" data-wow-iteration="infinite" data-wow-duration="6000ms"  style="margin-left:0px; margin-top:200px; font-size:200px; float:left;"></span>
						<span class="fa fa-cloud wow shake" data-wow-iteration="infinite" data-wow-duration="5000ms"  style="margin-left:-30px; margin-top:50px; font-size:130px; float:left;"></span>
						<span class="fa fa-cloud wow shake" data-wow-iteration="infinite" data-wow-duration="4600ms"  style="margin-left:40px; font-size:90px; float:left;"></span>
						<span class="fa fa-cloud wow shake" data-wow-iteration="infinite" data-wow-duration="9000ms"  style="margin-left:0px; margin-top:0px; font-size:200px; float:left;"></span>
						<span class="fa fa-cloud wow shake" data-wow-iteration="infinite" data-wow-duration="5000ms"  style="margin-left:0px; margin-top:150px; font-size:130px; float:left;"></span>
						<span class="fa fa-cloud wow shake" data-wow-iteration="infinite" data-wow-duration="4000ms"  style="margin-left:0px; font-size:90px; float:left;"></span>
						<span class="fa fa-cloud wow shake" data-wow-iteration="infinite" data-wow-duration="8000ms"  style="margin-left:0px; margin-top:200px; font-size:170px; float:left;"></span>
						<span class="fa fa-cloud wow shake" data-wow-iteration="infinite" data-wow-duration="7000ms"  style="margin-left:-10px; font-size:100px; float:left;"></span>


					</div>
					<div class="center">
						<img class="logo wow fadeInDown" data-wow-delay="500ms" src="css/images/logo.png">
					</div>
					<div class="center">
						<img class="dog wow bounceInLeft" src="css/images/dog2.png">
					</div>
					<div class="center">
						<img class="cat wow bounceInRight" src="css/images/cat.png">
					</div>
				</div>
				<div class="vinte"></div>
			</div>
			
			<div class="menu">
					<div class="innerMenu" id="innerMenu" onclick="abreMenu()">						
						<div class="titMenu" id="titMenu"><span class="fa fa-navicon" id="navicon"></span> Menu</div>
						<div class="navig">
							<ul id="navig">
								<li><a href="#div2">Rumo à castração</a></li>
								<li><a href="#div3">Menos Abandono</a></li>
								<li><a href="#div4">Por que devo adotar?</a></li>
								<li><a href="#div5">Adote um amigo</a></li>
								<li><a href="#div6">Colaboradores</a></li>
								<li><a href="#div7">Contato</a></li>
								<li><a onclick="location='blog.php'">Blog</a></li>
								
							</ul>
						</div>
					</div>
			</div>
			<script type="text/javascript">
				var check=0;
				function abreMenu(){
					var w = window.innerWidth;
        				if (w>980){
							if (check==0){
								check++;
								document.getElementById("titMenu").style.fontSize="40px";
								document.getElementById("titMenu").style.textAlign="right";
								document.getElementById("navicon").className="fa fa-close";

								document.getElementById("innerMenu").style.width="340px";
								document.getElementById("innerMenu").style.height="440px";
							}
							else{
								check--;
								document.getElementById("titMenu").style.fontSize="30px";
								document.getElementById("titMenu").style.textAlign="center";
								document.getElementById("navicon").className="fa fa-navicon";

								document.getElementById("innerMenu").style.width="120px";
								document.getElementById("innerMenu").style.height="35px";

							}
						}
						if (w<=980){
							if (check==0){
								check++;
								document.getElementById("titMenu").style.textAlign="right";
								document.getElementById("navicon").className="fa fa-close";

								document.getElementById("innerMenu").style.width="445px";
								document.getElementById("innerMenu").style.height="600px";
							}
							else{
								check--;
								document.getElementById("titMenu").style.fontSize="50px";
								document.getElementById("titMenu").style.textAlign="center";
								document.getElementById("navicon").className="fa fa-navicon";

								document.getElementById("innerMenu").style.width="250px";
								document.getElementById("innerMenu").style.height="60px";

							}
						}
				}
			</script>

			<div class="div2" id="div2">

				<div class="mid wow bounceInLeft"><img src="css/images/lovePet.png"></div>
				<div class="castracao wow bounceInRight">Rumo à castração para diminuir a população de animais de Charqueadas.</div>
			</div>

			<div class="div3" id="div3">
				<div class="abandono wow bounceInLeft">Menos abandono, doenças e maus tratos.</div>
				<div class="contentAbandono">	
					<div class="innerAbandono">
						<i class="fa fa-paw"></i> Cão Patrulha: auxílio-alimentação para os peludos que têm fome, medicação e carinho aos doentes de quatro patas.
					</div>
					
					<div class="innerAbandono" data-wow-delay="200ms">
						<i class="fa fa-paw"></i> Mutirões de controle populacional nos bairros da cidade, com a parceria da veterinária Patrícia Radi (funcionária da Prefeitura Municipal de Charqueadas).
					</div>
					
					<div class="innerAbandono" data-wow-delay="400ms">
						<i class="fa fa-paw"></i> Divulgação de informações e esclarecimentos à comunidade sobre o bem estar de seus pets.
					</div>
				</div>
			</div>
			<div class="div4" id="div4">
				<div class="titDiv4"><img src="css/images/donkey.png"> Por que devo adotar?<img src="css/images/cow.png"></div>
				<div class="contentDiv4">
					<p>No Brasil, embora não haja uma estatística oficial, o número de animais simplesmente “jogados fora” e abandonados à própria sorte pode chegar a 20 milhões.</p>
					<p>Se entendermos que animais não são mercadorias, mas seres capazes de sentimento, que têm necessidades de amar e de serem amados, concordaremos que não há sentido em se comprar animais. Comprando um animal, você estará incentivando um comércio muito injusto, o comércio de seres vivos. Lembre-se que só haverá vendedor se houver comprador.</p>
					<p>Adotar um animal é valorizar a vida. Um cão ou gato é capaz de sentir emoções – como dor e alegria/excitação – e por isso, sofre tanto quanto nós, humanos. É recuperar uma vida literalmente jogada fora. Ao adotar um animal carente, você ensina ao seu filho, às crianças com quem você convive, verdadeiros valores de responsabilidade, comprometimento e, sobretudo, humanidade.</p>
					<p>Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados. Geralmente os animais de rua ou de abrigos já passaram por muito sofrimento e tudo o que eles precisam é de um bom lar para serem felizes de verdade.E não há recompensa maior do que vê-los se transformarem naquela coisinha alegre e saudável depois de receberem uma boa dose de cuidados e carinho.</p>
					<div class="mid"><img src="css/images/adote.png"></div>
				</div>
			</div>

			<div class="div5" id="div5">
				<div class="titDiv5 wow bounceInLeft">Adote um amigo</div>
				<div class="contentDiv5">
					
		<!--LINHA FOTOS CACHORROS-->
					<div class="innerContentDiv5">
						<?php
							$sql = "SELECT * FROM Animais"; 
							$result = mysqli_query($con, $sql); 
						 	while($consulta = mysqli_fetch_array($result)) { 
							   echo "<div class=\"innerDiv5 wow fadeInUp\">";
							   echo "<div class=\"dogPicGeral\">";
							   echo "<div class=\"dogPic2\"><img src=\"http://i1.r7.com/data/files/2C95/948F/34D0/007E/0134/D232/5EB7/5899/reuters-12jan2012-c%C3%A3o-1-TL.jpg\"></div>";
							   echo "<div class=\"dogPic1\"><span class=\"fa fa-spinner fa-pulse\"></span></div>";
							   echo "</div>";
							   echo "<div class=\"bottomDogImg\">";
							   echo "<b>Nome:</b> <span>$consulta[Nome]</span><br>";
							   echo "<b>Idade:</b> <span>$consulta[Idade]</span><br>";
							   echo "<div class=\"social\">";
							   echo "<div class=\"euQuero\">Eu Quero</div>";
							   echo "</div></div></div>";




							  // echo "<img src='img/$consulta[Foto]'><h3>Nome: $consulta[Nome]</h3><p>Idade: $consulta[Idade]</p>"; 
							   // codigo para mostrar os cachorros
							  
							}?>
						
						
					</div>
		<!--FIM LINHA 1, APENAS PRECISA SER REPLICADA COMO FOR NECESSÁRIA-->

					</div>
				</div>
			</div>

			<div class="div6" id="div6">
				<div class="titDiv6"><img src="css/images/fox.png"> Seja um colaborador<img src="css/images/sheep.png"></div>
				<div class="contentDiv6">
					<p style="text-align:center">O projeto amicão só é possível devido ao apoio de pessoas que desejam as mudanças como você.<br>Entre em contato conosco e torne-se um colaborador, em troca a sua marca pode aparecer aqui no amicão!</p>
					<div class="colaboradores" style="margin-top:40px;">
						<a href=""><img src="css/images/colaboradores/suamarca1.png"></a>
						<a href=""><img src="css/images/colaboradores/suamarca2.png"></a>
						<a href=""><img src="css/images/colaboradores/suamarca1.png"></a>
						<a href=""><img src="css/images/colaboradores/suamarca2.png"></a>
						<a href=""><img src="css/images/colaboradores/suamarca1.png"></a>
						<a href=""><img src="css/images/colaboradores/suamarca2.png"></a>
						<a href=""><img src="css/images/colaboradores/suamarca1.png"></a>
						<a href=""><img src="css/images/colaboradores/suamarca2.png"></a>
						<a href=""><img src="css/images/colaboradores/suamarca1.png"></a>
						<a href=""><img src="css/images/colaboradores/suamarca2.png"></a>
					</div>
				</div>
			</div>
			<div class="div3" id="div7">
				<div class="abandono">Contatos <i class="fa fa-phone wow tada" data-wow-iteration="infinite" data-wow-duration="1500ms"></i></div>
				<div class="contentAbandono" style="padding-bottom:20px;">	
					<div class="innerAbandono2">
						<i class="fa fa-phone"> <span>Telefones:</span></i><br> 
							(51) 9999 9999<br>
							(51) 3658 1234<br><br>
						<i class="fa fa-paper-plane"> <span>E-mail:</span></i><br>
							voluntariadoamicao@facebook.com
					</div>
					
					<div class="innerAbandono2">
						<i class="fa fa-user"> <span>Social:</span></i><br> 
							<a onclick="location='https://www.facebook.com/VoluntariadoAmicao?fref=ts'"><i class="fa fa-facebook-square"></i></a> <a><i class="fa fa-twitter-square"></i></a>
							<br>

						<div style="margin-top:15px"><i class="fa fa-map-marker"> <span>Endereço:</span></i><br>
							Rua das Flores, 929<br>
							Charqueadas - RS<br>
							CEP: 96745-000</div>
					</div>

					<div class="innerAbandono2">
						<i class="fa fa-dollar"> <span>Doações:</span></i><br>
							Banco -<br>
							Conta Corrente: 00000-00<br>
							Agência: 0000<br>
							<div style="margin-top:15px">
							<i class="fa fa-lock"> <span>Acesso Restrito:</span></i><br>
							<a onclick="location='login.php'" style="cursor:pointer;"> <i class="fa fa-angle-right" style="font-size:20px;"></i> Acesso administrativo</a></div>
					</div>
					
				</div>
				<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3456.541687612685!2d-51.616471495553576!3d-29.96385884184852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1427999024093" width="100%" height="300px" frameborder="0" style="border:0"></iframe>
				</div>
			</div>
			<footer>
				<div class="linkLighter">2015 © Amicão. Todos os direitos reservados. Desenvolvido por <a style="cursor:pointer;" onclick="location='http://www.lighterdesign.com.br'">Lighter Design.</a> 
				</div>
			</footer>
		</div>

		<script type="text/javascript">
			jQuery("document").ready(function($){
			    
			    var nav = $('.menu');
			    
			    $(window).scroll(function () {
			        if ($(this).scrollTop() > 660) {
			            nav.addClass("f-menu");
			        } else {
			            nav.removeClass("f-menu");
			        }
			    });
			 
			});
		</script>
		<script type="text/javascript">
			$('body').on('click', 'a', function(e) {       
			    e.preventDefault();
			    $('html, body').animate({
			        scrollTop: $( $.attr(this, 'href') ).offset().top
			    }, 1000);
			});
		</script>

		<script src="js/wow.min.js"></script>
		<script src="js/wow.js"></script>
		<script>
		    wow = new WOW(
		      {
		        animateClass: 'animated',
		        offset:       100,
		        callback:     function(box) {
		          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
		        }
		      }
		    );
		    wow.init();
		</script>
	</body>
</html>