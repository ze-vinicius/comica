<?php
    include "templates/header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm">
                <form class="form" method="POST" action="_cadastro_autor.php">
                    <h2>Cadastro autor</h2>
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <input type="submit" value="Cadastrar">
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>