<?php
$title = "cadastro";
include "templates/header.php";
?>
<div class="container align-items-center">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm">
            <form method="POST" action="_cadastro_usuario.php">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="login">Login: </label>
                    <input type="text" name="login" id="login" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" type="email" class="form-control" require>
                </div>
                <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" class="btn btn-primary">
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>