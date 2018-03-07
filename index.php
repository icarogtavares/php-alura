<?php
require_once("cabecalho.php");
require_once('logica-usuario.php');
?>
<h1>Bem vindo!</h1>
<?php
showAlert('success');
showAlert('danger');

if(isTheUserLoggedIn()) { ?>
    <p class="text-success">Você está logado como <?= getLoggedUser() ?></p> <a href="logout.php">Deslogar</a>
<?php } else { ?>

<form action="login.php" method="post">
    <table class="table">
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="email" name="email"></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input class="form-control" type="password" name="senha"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Entrar" class="btn btn-primary"></td>
        </tr>
    </table>
</form>
<?php } ?>


<?php include("rodape.php"); ?>
