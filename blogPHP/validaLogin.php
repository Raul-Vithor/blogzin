<?php
session_start();
if(isset($_POST['user']) && isset($_POST['pass'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];
					
	$user1 = 'raul';
	$pass1 = 'bababoey';
					
	$user2 = 'vitor';
	$pass2 = '12345';
										
		if(($user == $user1 && $pass == $pass1)){
			$_SESSION['user']=$user;
			$_SESSION['pass']=$pass;
			header("Location: painel.php");

		}elseif(($user == $user2 && $pass == $pass2)){
			$_SESSION['user']=$user;
			$_SESSION['pass']=$pass;
			header("Location: blogAdmin.php");
		}else{
			echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
            header("location: index.php");
		}
	
}
?>

