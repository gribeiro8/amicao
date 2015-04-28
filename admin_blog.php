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
			language: 'pt_BR',
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

<div class="divAdm">
	<?php 
		echo "<div class=\"headerAdmin\">";
		echo $_SESSION['email'];
		echo " | <a href='admin.php?sair=1'>Logout</a>";
		echo "</div>"?>
	<?php include 'menuAdmin.php' ?>




	<h1> Sistema de blog</h1>
	<form action="admin_blog.php" method="POST">
		<label>Titulo:</label><br><input name="titulo" type="text" class="formTextLog"><br>
		<label>Foto:</label><br><input type="file" name="foto" class="formTextLog"><br><br>
		<div style="width:100%; max-width:1040px;margin:0 auto;">
			<label>Texto:</label> <textarea name="content" style="width:100%;"></textarea></textarea>
		</div>

		<button type="submit" class="butn">Enviar</button>
	</form>



	<h1>Postagens</h1>
	<?php
		$sql = "SELECT * FROM Postagem"; 
		$result = mysqli_query($con, $sql); 
	 	while($consulta = mysqli_fetch_array($result)) {
		    echo "<div class=\"hideNews\" id=\"$consulta[CodPostagem]\" onclick=\"abrePostagem(this.id)\">";
			echo "<h3><i class=\"fa fa-angle-right\"></i>$consulta[Titulo]";
			echo "<b>27/04/2015 <i class=\"fa fa-trash\" title=\"Deletar\"></i>";
			echo "<i class=\"fa fa-pencil\" title=\"Editar\"></i></b></h3>";
			echo "$consulta[Texto]</div>";
		}?>

		<script type="text/javascript">
			checkPost=0;
			function abrePostagem(id){
				if (checkPost==0) {
					checkPost++;
					document.getElementById(id).style.height="auto";
					//document.getElementById(id).style.overflow="auto";
				}
				else{
					checkPost--;
					document.getElementById(id).style.height="30px";
					//document.getElementById(id).style.overflow="hidden";
				}
			}
		</script>

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
<?php }else{ header('Location: index.php');} ?>