<?php
    session_start();
    require_once 'connect.php';
    
    $full_name = htmlspecialchars($_POST['full_name']);
    $login = htmlspecialchars($_POST['login']);
    $e_mail = htmlspecialchars($_POST['e_mail']);
    $password = htmlspecialchars($_POST['password']);
    $password_confirm = htmlspecialchars($_POST['password_confirm']);
    $avatar = htmlspecialchars($_POST['avatar']);
    
    if ($password === $password_confirm) {
        
    } else {
        $_SESSION['message'] = 'пароли не совпадают';
        header('Location: ../register.php');
    }
?>

<!--<pre>
    <?php
        print_r( $_FILES );
    ?>
</pre>-->


