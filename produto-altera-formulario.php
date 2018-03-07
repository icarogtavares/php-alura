<?php
    require_once("cabecalho.php");
    require_once("banco-categoria.php");
    require_once("banco-produto.php");

    $id = $_POST['id'];

    $produto = buscaProduto($conexao, $id);
    $isChecked = $produto['usado'] ? "checked" : "";
?>

<h1>Alterar produto</h1>
<form action="altera-produto.php" method="post">
    <table class="table">
    <?php include('produto-formulario-base.php');?>
    <tr>
        <td><button class="btn btn-primary" type="submit">Alterar</button></td>
    </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
