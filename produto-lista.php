<?php
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once('logica-usuario.php');
?>


<?php
    showAlert("success");
?>

<table class="table table-striped table-bordered">

    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto) :
    ?>
    <tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?=substr($produto['descricao'], 0, 40)?></td>
        <td><?=$produto['categoria_nome']?></td>
        <td>
            <form action="produto-altera-formulario.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <input type="submit" value="alterar" class="btn btn-primary">
            </form>
        </td>
        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>"></input>
                <button type="submit" class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("rodape.php"); ?>
