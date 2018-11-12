<?php
$title = "Login";
include "templates/header.php";
?>
<div class="container">
    <div class="row align-items-center">
        <div class="col-sm-4"></div>
        <div class="col-sm">
        <form method="POST" action="_login.php">
            <div class="form-group">
                <label for="login">Login: </label>
                <input type="text" id="login" name="login" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password: </label> 
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Login" name="button" id="button">
            </div>
        </form>
        <p>Ainda não tem uma conta? <br><a href="cadastro.php">cadastre-se já</a></p>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
</html>