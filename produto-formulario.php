<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once('logica-usuario.php');

verifyUser();
$produto = array("nome"=>"", "preco"=>"", "descricao"=>"", "categoria_id"=>1);
$usado = "";
?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="post">
    <table class="table">
        <?php include('produto-formulario-base.php');?>
        <tr>
                <td><button class="btn btn-primary" type="submit">Adicionar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
