<?php include "header.php"; ?>

<form method="post">
<input type="text" name="user" placeholder="Nome de usuário" required > <br>
<input type="password" name="password" placeholder="Senha" required > <br>
<input type="password" name="r-password" placeholder="Confirme a senha" required > <br>
<input type="submit" value="Registrar-se" />
</form> 

    <?php 
    include "connect.php";
    if(isset($_POST['user'], $_POST['password'])){
    $a=$_POST['user'];
    $b=md5(md5($_POST['password']."#?*&#"));
    $c=md5(md5($_POST['r-password']."#?*&#"));;
        if($b==$c){
        $register="INSERT INTO tb_users VALUES (NULL, '$a', '$b', 0, 0, 0, 0, 0, 0, 0)";
        $result=mysqli_query($connect, $register);
            if ($result) {
                header('location:login.php');
        }
    }
    else {
        echo "As senhas não coincidem";
        }
    }

    mysqli_close($connect);
    ?>
<?php include "footer.php"; ?>