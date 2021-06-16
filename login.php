<?php include "header.php"; ?>

<h2> Entrar no Popinjay Messenger </h2>
<form method="post">
<input type="text" name="username" placeholder="Nome de usuário" class="field-login" required >
<input type="password" name="password" placeholder="Senha" class="field-login" required >
<input type="submit" value="Entrar" id="submit-login" >
</form> 
<p>
<a href="#">Esqueceu sua senha?</a> · 
<a href="register.php"> Registre </a>

	<?php 
	include "connect.php";

	if(isset($_POST['username'],$_POST['password'])){
		$username=$_POST['username'];
		$password=md5(md5($_POST['password']."#?*&#"));;
		$check=mysqli_query($connect, "SELECT * FROM tb_users WHERE username ='$username' AND password ='$password'");
		if(mysqli_num_rows($check) > 0 ) {
				session_start();
                $data=mysqli_fetch_array($check);
                $id_user=$data['id_users'];
				$_SESSION['id-user']=$id_user;
						
				header("Location: home.php");
		}
		else {
				unset ($_SESSION['id-user']);
				unset ($_SESSION['name']);
				unset ($_SESSION['user-checked']);
				unset ($_SESSION['password-checked']);
				echo "Usuário ou senha incorretos";
		}
	}
	
	mysqli_close($connect);
	?>
</p>
	</div>
    
<?php include "footer.php"; ?>