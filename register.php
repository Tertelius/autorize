<?php
    //подключаем доступ к сесиям
    session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Регистрация</title>
        <link rel="stylesheet" href="asssets/css/main.css">
    </head>
    <body>
        <!--форма регистрации-->
        
        <form action="vendor/signup.php" method="post" enctype="multipart/from-data">
            <label>ФИО: </label>
            <input type="text" name="full_name" placeholder="Введите свое полное имя">
            
            <label>Логин: </label>
            <input type="text" name="login" placeholder="Введите желаемый логин">
            
            <label>Файл аватарки: </label>
            <input type="file"  name="avatar">
            
            <label>email: </label>
            <input type="email" name="e_mail" placeholder="Введите адрес своей почты">
            
            <label>Пароль: </label>
            <input type="password" name="password" placeholder="Введите пароль">
            
            <label>Подтверждение пароля: </label>
            <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
            
            <button>Войти</button>      
            <p>
                У вас уже есть аккаунт? - <a href="/">Войти</a>
            </p>
            <?php
                //если есть сообщение то
                if ($_SESSION['message']){
                    //выводим сообщение и сразу же его уничтожаем
                    echo '<p class="message">' . $_SESSION['message'] . '</p>';
                    unset($_SESSION['message']);
                }
            ?>
        </form>
    </body>
</html>
