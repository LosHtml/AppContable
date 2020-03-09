
<?php

session_start();
	require("Conexion.php");

	$username=$_POST['usuario'];
	$pass=$_POST['pass'];
	$email=$_POST['email']


	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE usuario='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pass2']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['usuario']=$f2['usuario'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='index.html'</script>";
		
		}
	
	}

	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$email'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pass2']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['email']=$f2['email'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='index.html'</script>";
		
		}
	
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE usuario='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['pass']){
			$_SESSION['id']=$f['id'];
			$_SESSION['usuario']=$f['usuario'];
			$_SESSION['rol']=$f['rol'];
			echo '<script>alert("BIENVENIDO User")</script> ';
			echo "<script>location.href='index.html'</script>";
			/*
			header("Location: index.html");
			*/
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='inicio.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE")</script> ';
		
		

	}

?>