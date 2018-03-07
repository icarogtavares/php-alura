<input type="hidden" name="id" value="<?=$produto["id"]?>">
<tr>
    <td>Nome</td>
    <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>" /></td>
</tr>
<tr>
    <td>Preço</td>
    <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"/></td>
</tr>
<tr>
    <td>Descrição</td>
    <td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea></td>
</tr>
<tr>
    <td></td>
    <td>
        <input type="checkbox" <?=$isChecked?> name="usado"> Usado
    </td>
</tr>
<tr>
    <td>Categorias</td>
    <td>
        <select name="categoria_id">
        <?php
        $categorias = listarCategorias($conexao);
        foreach($categorias as $categoria) : 
            $isCategoriaDoProduto = $categoria['id'] == $produto['categoria_id'];
            $isSelected = $isCategoriaDoProduto ? "selected" : ""?>
            <option <?=$isSelected?> value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
        <?php endforeach ?>
        </select>
    </td>
</tr>