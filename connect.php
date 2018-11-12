<?php
try {
        $connection = mysqli_connect("localhost:8889", "root", "root", "comica");        
    } catch (Exception $erro) {
        echo "ERRO: " . $erro->getMessage();
    }
?>