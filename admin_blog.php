<?php
	session_start();
	$con = mysqli_connect("localhost", "root", "root","lighterd_amicao") or print (mysql_error()); 
	mysqli_query($con,"set names 'utf8'");
	
	if(isset($_SESSION['cod'])){

	if(isset($_GET['sair'])){
		session_destroy();
		header('Location: index.php');
	}

	if (isset($_POST['nome'])){

		$foto = $_FILES["foto"];

		// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "img/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);


		$sql = "Insert into Animais (Nome,Idade,Facebook,Foto,CodUsuario) VALUES ('".$_POST['nome']."','".$_POST['idade']."','".$_POST['facebook']."','".$nome_imagem."',1);"; 
				echo $sql;
		mysqli_query($con,$sql); 
		header('Location: index.php');
	}

	if (isset($_POST['titulo'])){
		$sql = "Insert into Postagem (Titulo, Texto, CodUsuario) VALUES ('".$_POST['titulo']."','".$_POST['content']."',1);"; 
				//echo $sql;
		mysqli_query($con,$sql); 
		//header('Location: login.php');
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
<body>
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
<div id="menu">
	<a href="admin.php"> Início </a>
	<a href="admin_animais.php"> Animais </a>
	<a href="admin_blog.php"> Blog </a>
	<a href="admin_denuncia.php"> Denuncia </a>
</div>

<?php 
	echo $_SESSION['email'];
	echo " <a href='admin.php?sair=1'>Logout</a>";?>




<h1> Sistema de blog </h1>
<form action="login.php" method="POST">
	<label>Titulo:</label><input name="titulo" type="text"><br>
	<label>Texto:</label> <textarea name="content" style="width:100%"></textarea></textarea><br>
	
	<button type="submit">Enviar</button>
</form>



<h1>Postagens</h1>
<?php
	$sql = "SELECT * FROM Postagem"; 
	$result = mysqli_query($con, $sql); 
 	while($consulta = mysqli_fetch_array($result)) { 
	   echo "<h3>Titulo: $consulta[Titulo]</h3><p>Texto: $consulta[Texto]</p>"; 
	}?>


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
<?php }else{ header('Location: index.php');} ?>