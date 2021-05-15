<?php

    $connect = mysqli_connect('localhost', 'root', '', 'students');
    
    if (!$connect) {
        die('error connect to database');
        //если соединение не состоялось, стопорим скрипты.
    }
