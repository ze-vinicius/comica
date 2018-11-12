<?php
    require_once "connect.php";
    
    $name = $_POST['name'];
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $query_select = "SELECT login FROM users WHERE login = '$login'";
    $select = mysqli_query($connection, $query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['login'];
    if($login == null || $login == ""){
        echo "<script language='javascript' type='text/javascript'>alert('Preencha todos os campos');window.location.href='cadastro.php';</script>";
    } else {
        if($logarray == $login){
            echo "<script language='javascript' type='text/javascript'> alert('Esse login já existe');window.location.href='cadastro.php';</script>";
            die();
        }
        else {
            $query = "INSERT INTO users (name, login, password, email) VALUES ('$name', '$login', '$password', '$email')";
            $insert = mysqli_query($connection, $query);
            
            if($insert){
                echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
            }else{
            echo"<script language='javascript' type='text/javascript'>alert('');window.location.href='cadastro.php'</script>";
            }
        }
    }
?>
