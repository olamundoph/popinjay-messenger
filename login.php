<?php include "header.php"; ?>
<form method="post">
<input type="text" name="user" placeholder="Usuário" required /> <br/>
<input type="password" name="password" placeholder="Senha" required /> <br/>
<input type="submit" value="Login" />
</form> 

	<?php 
	include "connect.php";
	if(isset($_POST['user'],$_POST['password'])){
		session_start();
		$user=$_POST['user'];
		$password=md5(md5($_POST['password']."#?*&#"));;
		$check=mysqli_query($connect, "SELECT * FROM tb_users WHERE users ='$user' AND passwords ='$password'");

		if(mysqli_num_rows($check) > 0 ) {
			$_SESSION['user-checked']=$user;
			$_SESSION['password-checked']=$password;
			header('location:home.php');
		}
		else {
			unset ($_SESSION['user-checked']);
			unset ($_SESSION['password-checked']);
			echo "Senha ou usuário incorreto";
		}
	}
	mysqli_close($connect);
	?>

	<p> Não tem registro?<a href="register.php"> Abra a sua conta aqui</a> </p>

<?php include "footer.php"; ?>