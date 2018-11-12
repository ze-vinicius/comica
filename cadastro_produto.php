<?php
    $title = "cadastrar produtos";
    include "templates/header.php";
    require_once "connect.php";
?> 
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm">
            <form method="POST" action="_cadastro_produto.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="img-icon">Icone: </label>
                    <input type="file" name="img" id="img" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Título da obra:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Preço: R$</label>
                    <input type="number" id="price" name="price" min=0 step="any" class="form-control">
                </div>
                <div class="form-group">
                    <label for="qtt_stock">Quantidade Disponível: </label>
                    <input type="number" name="qtt_stock" id="qtt_stock" min=0 class="form-control">
                </div>
                <div class="form-group">
                    <label for="type">Tipo: </label>
                    <input type="text" name="type" id="type" placeholder="quadrinho, livro, etc" class="form-control">
                </div>
                <div class="form-group">
                    <label for="qtt_pages">Quantidade de Páginas: </label>
                    <input type="number" name="qtt_pages" id="qtt_pages" class="form-control">
                </div>
                <div class="form-group">
                    <label for="desc">Descrição: </label>
                    <textarea name="desc" id="desc" rows="10" cols="50" class="form-control" placeholder="sinopse da história"> </textarea>
                </div>
                <div class="form-group">
                    <label for="author">Autor: </label>
                    <select name="author" id="author">
                        <?php
                            $query = mysqli_query($connection, "SELECT * FROM authors");
                            
                            while($author = mysqli_fetch_assoc($query)){
                                echo '<option value='.$author['id_author'].'>'.$author['name'].'</option>';
                            }
                        ?>
                    </select>
                    <!-- <input type="text" name="author" id="author" class="form-control"> -->
                </div>
                <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar" class="btn btn-primary">
                
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
</html>