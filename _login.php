<?php
    require_once "connect.php";

    $button = $_POST['button'];
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    if(isset($button)){
        $verify = mysqli_query($connection, "SELECT * FROM users WHERE login = '$login' AND password = '$password'") or die("Error");

        if(mysqli_num_rows($verify) <= 0) {
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos var_dump($password)');window.location.href='login.php?senha='.$password;</script>";
            die();
        } else {
            setcookie("login",$login);
            header("Location:produtos.php");
        }
    }
?>