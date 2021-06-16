<section>
<div id="chat-history">
<?php
include "connect.php";
if (!isset($_SESSION)) { 
	session_start(); 
}
                $idProfile=$_SESSION['id-user'];
                $sqlMSG = mysqli_query($connect, "SELECT * FROM chat_messages
                inner join tb_users 
                on chat_messages.user_to= tb_users.id_users
                WHERE user_to=".$idProfile);
     
     
     while ($result=mysqli_fetch_array($sqlMSG)) {
         echo "|".$result['msg']."<br>";
         }
?>
</div>


<form method="post" id="chat-post">
    <div>
    <textarea id="chatbox" placeholder="Digite uma mensagem" name="message"></textarea>
    </div>
    <div>
    <input id="chat-post-btn" type="submit" value=">">
    </div>
</form>


<?php
    include "connect.php";
    include "session.php";
    if (!isset($_SESSION)) { 
        session_start(); 
    }
    if(isset($_POST['message'])){
        $user=$_SESSION['id-user'];
        $msg=$_POST['message'];
        $send_msg="INSERT INTO chat_messages VALUES (NULL, $user, 2, '$msg', NOW() )";
        $result=mysqli_query($connect, $send_msg);
            if ($result) {
                echo "enviada";
                }
               
            else {
                echo "Senhas não coincidem";
            }
        }
    mysqli_close($connect);
    ?>

</section>