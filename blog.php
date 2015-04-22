<?php
	//session_start();
	$con = mysqli_connect("localhost", "root", "root","lighterd_amicao") or print (mysql_error()); 
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
			<div class="topDivBlog" id="div1">
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
						<img class="logoBlog wow fadeInDown" data-wow-delay="500ms" src="css/images/logoBlog.png">
					</div>
					<div class="center">
						<img class="dogBlog wow bounceInLeft" src="css/images/cat.png">
					</div>
					<div class="center">
						<img class="catBlog wow bounceInRight" src="css/images/dog2.png">
					</div>
				</div>
				<div class="vinte"></div>
			</div>
			
			<div class="menu">
					<div class="innerMenu" id="innerMenu" onclick="abreMenu()">						
						<div class="titMenu" id="titMenu"><span class="fa fa-navicon" id="navicon"></span> Menu</div>
						<div class="navig">
							<ul id="navig">
								<li><a onclick="location='../Amicao/#div2'">Rumo à castração</a></li>
								<li><a onclick="location='../Amicao/#div3'">Menos Abandono</a></li>
								<li><a onclick="location='../Amicao/#div4'">Por que devo adotar?</a></li>
								<li><a onclick="location='../Amicao/#div5'">Adote um amigo</a></li>
								<li><a onclick="location='../Amicao/#div6'">Colaboradores</a></li>
								<li><a href="#div7">Contato</a></li>
								<li><a href="#">Blog</a></li>
								
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

			<div class="divBlog" id="divBlog">
				<?php
					$sql = "SELECT * FROM Postagem"; 
					$result = mysqli_query($con, $sql); 
				 	while($consulta = mysqli_fetch_array($result)) {
				 		echo "<div class=\"titDivBlog\">$consulta[Titulo]</div>";
				 		echo "<div class=\"bannerPostagem\" 
				 		 style=\"background: url('https://www.petfinder.com/wp-content/uploads/2012/11/dog-how-to-select-your-new-best-friend-thinkstock99062463.jpg') no-repeat center center;
								-webkit-background-size: cover;
						  		-moz-background-size: cover;
						  		-o-background-size: cover;
						  		background-size: cover;
								\"></div>";
				 		echo "<div class=\"dataPostagem\">Postado em <span style=\"color:#9B2F4C\">07/04/2015</span></div>";
				 		echo "<div class=\"contentDivBlog\">";
				 		echo "<p>$consulta[Texto]</p>";
				 		echo "</div>";
					  	echo "<div class=\"separator\"><i class=\"fa fa-paw\"></i></div>";
					  }					  
				?>
				<div class="paginacao">
					<ul>
						<li><a href="#" style="color: #9B2F4C;">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
					</ul>
				</div>
			</div>
			

			
			<div class="div3" id="div7">
				<div class="abandono">Contatos <i class="fa fa-phone wow tada" data-wow-iteration="infinite" data-wow-duration="1500ms"></i></div>
				<div class="contentAbandono" style="padding-bottom:20px;">	
					<div class="innerAbandono2">
						<i class="fa fa-lock"> <span>Acesso Restrito:</span></i><br>
						<a onclick="location='login.php'" style="cursor:pointer;"> <i class="fa fa-angle-right" style="font-size:20px;"></i> Acesso administrativo</a><br><br>
						
						<i class="fa fa-paper-plane"> <span>E-mail:</span></i><br>
							amicaovoluntariado@gmail.com
					</div>
					
					<div class="innerAbandono2">
						<i class="fa fa-user"> <span>Social:</span></i><br> 
							<a onclick="location='https://www.facebook.com/VoluntariadoAmicao?fref=ts'"><i class="fa fa-facebook-square"></i></a> <a><i class="fa fa-twitter-square"></i></a>
							<br>

						<div style="margin-top:15px"><i class="fa fa-map-marker"> <span>Endereço:</span></i><br>
							Rua Dona Clara, 581<br>
							Charqueadas - RS<br>
							CEP: 96745-000</div>
					</div>

					<div class="innerAbandono2">
						<i class="fa fa-dollar"> <span>Doações:</span></i><br>
							Carlos Alberto Martins Luongo<br>
							Banco Banrisul<br>
							Ag: 0590 | CC: 35026640.06<br>
							CPF: 226.408.510-04<br>
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
			        if ($(this).scrollTop() > 360) {
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