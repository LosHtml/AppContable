
<?php

session_start();
	require("conexion.php");

	$username=$_POST['usuario'];
	$pass=$_POST['pass'];
	


	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE usuario='$username' OR email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pass'] && $f2['usuario_t'] === '2'){
			$_SESSION['id']=$f2['id'];
			$_SESSION['usuario']=$f2['usuario'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='../views/administrador/index.php'</script>";
		
		}
	
	}



	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE usuario='$username' OR email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['pass'] && $f2['usuario_t'] === '1'){
			$_SESSION['id']=$f['id'];
			$_SESSION['usuario']=$f['usuario'];
			$_SESSION['rol']=$f['rol'];
			echo '<script>alert("BIENVENIDO User")</script> ';
			echo "<script>location.href='../views/index.php'</script>";
			/*
			header("Location: index.html");
			*/
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE")</script> ';
		
		

	}

?>