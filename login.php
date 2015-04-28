<?php
	session_start();
	$con = mysqli_connect("localhost", "root", "root","lighterd_amicao") or print (mysql_error()); 
	mysqli_query($con,"set names 'utf8'");
	
	if (isset($_POST['login'])){
		$sql = "SELECT * FROM Usuario where Email like '".$_POST['login']."' AND Senha like '".$_POST['senha']."';";
		//echo $sql;
		$result = mysqli_query($con, $sql); 
		$select = mysqli_fetch_array($result);
		$nome = $select['Nome'];
		$email = $select['Email'];
		$cod = $select['CodUsuario'];
		$_SESSION['cod'] = $cod;
		$_SESSION['email'] = $email;
		header('Location:admin.php');
		
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<link rel="shortcut icon" href="css/images/icon.png" type="image/x-icon"/>
	<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
		tinymce.init({
		    selector: "textarea",
		    plugins: [
		        "advlist autolink lists link image charmap print preview anchor",
		        "searchreplace visualblocks code fullscreen",
		        "insertdatetime media table contextmenu paste"
		    ],
		    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		});
		</script>
	<title>Amicão</title>
	<meta charset="utf-8" />
	 
</head>
<body style="background-color:#FAF1D5;">
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
			<img class="logoBlog wow fadeInDown" data-wow-delay="500ms" src="css/images/logo2.png">
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

<div class="divLogin">
	<h1> Login </h1>
	<form action="login.php" method="POST">
		<label><i class="fa fa-paper-plane-o"></i> E-mail</label><br><input name="login" type="text" class="formTextLog"><br>
		<label><i class="fa fa-lock"></i> Senha</label><br><input name="senha" type="password" class="formTextLog"><br>
		<button type="submit" class="butn">Entrar</button>
	</form>
</div>

<footer>
	<div class="linkLighter">2015 © Amicão. Todos os direitos reservados. Desenvolvido por <a style="cursor:pointer;" onclick="location='http://www.lighterdesign.com.br'">Lighter Design.</a> 
	</div>
</footer>


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