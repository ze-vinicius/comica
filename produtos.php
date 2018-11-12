<?php 
require_once "connect.php";

$select = "SELECT * FROM products";
$produtos = mysqli_query($connection, $select);

$array_produtos = mysqli_fetch_assoc($produtos);
$total = mysqli_num_rows($produtos);
$title = "Produtos";
include "templates/header.php";
?>
    <div class="container">
        <?php
            if($total > 0) {
            do {
        ?>
        <div class="row">
            <div class="col-sm">
                <figure>
                    <img src="<?=$array_produtos['image']?>"/>
                </figure>
            </div>
            <div class="col-sm-6">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <!-- <th scope="col">Titulo: </th> -->
                    <th scope="col" colspan="2"><?=$array_produtos['name']?></th>
                </tr>
                </thead>
                <tr>
                    <th>Descrição: </th>
                    <th><?=$array_produtos['desc_product']?></th>
                </tr>
                <tr>
                    <th>Preço: </th>
                    <th>R$ <?=$array_produtos['price']?></th>
                </tr>
                <tr>
                    <th>Produto: </th>
                    <th><?= ($array_produtos['qtt_in_stock'] > 0 ) ? "Disponível" : "Esgotado" ?></th>
                </tr>
                <tr>
                    <th>Tipo: </th>
                    <th><?= $array_produtos['type_product'] ?></th>
                </tr>
                <tr>
                    <th>Quantidade de páginas: </th>
                    <th><?= $array_produtos['qtt_pages']?></th>
                </tr>
                <tr>
                    <th>Autor: </th>
                    <th>
                        <?php
                            $str = "SELECT name FROM authors where id_author = $array_produtos[id_author];";
                            $author = mysqli_query($connection, $str);
                            $author = mysqli_fetch_array($author);
                        ?>
                        <?=$author['name']?>
                    </th>
                </tr>
            </table>
            </div>
            <div class="col-sm"></div>
        </div>
        <?php
                } while($array_produtos = mysqli_fetch_assoc($produtos));
            }
        ?>
    </div>
</body>
</html>


