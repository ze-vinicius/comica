<?php
require_once "connect.php";

$name = $_POST['name'];
$price = $_POST['price'];
$qtt_stock = $_POST['qtt_stock'];
$type = $_POST['type'];
$qtt_pages = $_POST['qtt_pages'];
$desc = $_POST['desc'];
$author = $_POST['author'];
$img = $_FILES['img'];

$array_author = mysqli_fetch_array($query_author);
if(!empty($img["name"])){
    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img["name"], $ext);

    // Gera um nome único para a imagem
    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

    // Caminho de onde ficará a imagem
    $caminho_imagem = "img/" . $nome_imagem;

    // Faz o upload da imagem para seu respectivo caminho
    $query = "INSERT INTO products VALUES (NULL, '$author', '$name', $price, $qtt_stock, '$type', $qtt_pages, '$desc', '$caminho_imagem')";
    $query_products = mysqli_query($connection, $query) or die("Erro ao inserir");
    if($query_products){
        move_uploaded_file($img["tmp_name"], $caminho_imagem);
        echo "<script type='text/javascript'>alert('Produto cadastrado com sucesso');window.location.href='cadastro_produto.php'</script>";
    }
} else {
    // header("Location:cadastro_produto.php");
    echo "<script type='text/javascript'>alert('$author');window.location.href='cadastro_produto.php'</script>";
}

?>