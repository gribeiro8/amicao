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


		$sql = "Insert into Animais (Nome,Idade,Sexo,Foto,CodUsuario) VALUES ('".$_POST['nome']."','".$_POST['idade']."','".$_POST['sexo']."','".$nome_imagem."',1);"; 
				echo $sql;
		mysqli_query($con,$sql); 
		header('Location: admin_animais.php');
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

<div class="modalEdit" id="modalEdit">
	<div class="closeEdit" onclick="openEdit()"><i class="fa fa-close"></i></div>
	<div class="titEdit" id="titEdit">Nome Cachorro</div>
	<div class="imgDogModal" id="imgDogModal">
		<img src="" id="imgDogModalIn">
	</div>

</div>

<script type="text/javascript">
	var check2=0;
	function openEdit(id){
		//alert("nomeDog"+id);
		if (check2==0){
			check2++;
			document.getElementById("modalEdit").style.left="0";
			document.getElementById("titEdit").innerHTML = document.getElementById("nomeDog"+id).innerHTML;
			document.getElementById("imgDogModalIn").src = document.getElementById("imgDog"+id).src;
		}
		else{
			check2--;
			document.getElementById("modalEdit").style.left="100%";
		}
	}

</script>

<div class="divAdm">
		<?php 
			echo "<div class=\"headerAdmin\">";
			echo $_SESSION['email'];
			echo " | <a href='admin.php?sair=1'>Logout</a>";
			echo "</div>"?>
		<?php include 'menuAdmin.php' ?>

		<h1> Sistema de cadastro </h1>
		<form action="admin_animais.php" method="POST" enctype="multipart/form-data">
			<label>Nome:</label><br><input name="nome" type="text" class="formTextLog"><br>
			<label>Idade:</label><br><input name="idade" type="text" class="formTextLog"><br>
			<label>Selecione o sexo:</label><br><input name="sexo" type="radio" value="macho"><label style="font-size:17px;"><i class="fa fa-mars"></i> Macho</label>
			<br><input name="sexo" type="radio" value="femea"><label style="font-size:17px; color:#EB2D5F;"><i class="fa fa-venus"></i>Fêmea</label><br><br>
			<input type="file" name="foto" class="formTextLog"><br>
			<button type="submit" class="butn">Cadastrar</button>
		</form>


		<h1>Lista de animais</h1>
		<?php
			$sql = "SELECT * FROM Animais"; 
			$result = mysqli_query($con, $sql);
			echo "<div class=\"lineDogs\">"; 
		 	while($consulta = mysqli_fetch_array($result)) { 
			    echo "<div class=\"dogsAdmin\">";
			   	echo "<div class=\"dogsAdmin1\">";
			   	echo "<div class=\"imgDog\" style=\"";
				echo "background: url('img/$consulta[Foto]') no-repeat center center;
								-webkit-background-size: cover;
						  		-moz-background-size: cover;
						  		-o-background-size: cover;
						  		background-size: cover;\">
					  		</div>";
				echo "<h3>Nome: <span id=\"nomeDog$consulta[CodAnimais]\">$consulta[Nome]</span></h3>";
				echo "<p>Idade: $consulta[Idade]</p>
					  	</div>";
				echo "<div class=\"dogsAdminHover\">
					  		<div class=\"bots\">";
				echo "<i title=\"Deletar\" class=\"fa fa-trash\" style=\"background-color:rgba(252,23,23,1); width:40px; height:40px;";
				echo "padding:10px; color:#fff; font-size:40px;
					  margin-right:10px; cursor:pointer;opacity:1;\"></i>";
				echo "<i id=\"$consulta[CodAnimais]\" onclick=\"openEdit(this.id)\" title=\"Editar\""; 
				echo "class=\"fa fa-pencil\" style=\"background-color:#f1c40f; width:40px; height:40px;";
				echo " padding:10px; color:#fff; font-size:40px;cursor:pointer; opacity:1;\"></i>";
				echo "</div></div></div>"; 
			   // codigo para mostrar os cachorros  
				}
			echo "</div>";
			?>
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