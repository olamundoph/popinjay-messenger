<?php 
include "header.php"; 
?>

<form method="post">
<input type="text" name="username" placeholder="Nome de usuário"required /> 
<input type="text" name="name" placeholder="Nome" required /> 
<input type="password" name="password" placeholder="Senha" required /> 
<input type="password" name="r-password" placeholder="Repita a senha"required >
<input type="submit" value="Inscreva-se" >
</form> 

<?php
    include "connect.php";
    if(isset($_POST['username'], $_POST['name'], $_POST['password'])){
    $a=$_POST['username'];
    $b=$_POST['name'];
    $c=md5(md5($_POST['password']."#?*&#"));
    $d=md5(md5($_POST['r-password']."#?*&#"));
    $avatar="default.png";
        if(mysqli_num_rows(mysqli_query($connect, "SELECT * FROM tb_users WHERE username='$a'"))>0){
            echo "Esse nome de usuário já existe";
        }
        else {
            if($c==$d){
            $register="INSERT INTO tb_users VALUES (NULL,'$a', '$b', '$c', '$avatar', '', '', '', '', NOW() )";
            $result=mysqli_query($connect, $register);
                    if ($result) {
                    header("Location: login.php");
                    }
                }
                else {
                    echo "Senhas não coincidem";
                    }
        }
    }

    mysqli_close($connect);
    ?>

</p>


</div>