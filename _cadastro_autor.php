<?php
    include "connect.php";

    $name = $_POST["name"];

    $query = "INSERT INTO authors VALUES (NULL, '$name')";

    if(mysqli_query($connection, $query)){
        echo "<script type='text/javascript'>alert('autor cadastrado com sucesso');window.location.href='produtos.php'</script>";
    }
?>