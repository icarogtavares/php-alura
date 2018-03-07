<?php
require_once('conecta.php');

function listaProdutos($conexao) {
    $produtos = array();
    $query = "select p.*, c.nome as categoria_nome from produtos p inner join categorias c on p.categoria_id = c.id;";
    $resultado = $conexao->query($query);

    while($produto = $resultado->fetch_array()) {
        array_push($produtos, $produto);
    }
    
    return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
    $stmt = $conexao->prepare("insert into produtos (nome, preco, descricao, categoria_id, usado) values (?, ?, ?, ?, ?)");
    $stmt->bind_param("sdsib", $nome, $preco, $descricao, $categoria_id, $usado);
    return $stmt->execute();
}

function buscaProduto($conexao, $id) {
    $stmt = $conexao->prepare("select * from produtos where id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_array();
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
    $stmt = $conexao->prepare("update produtos SET nome=?, preco=?, descricao=?, categoria_id=?, usado=? where id = ?");
    $stmt->bind_param("sdsibi", $nome, $preco, $descricao, $categoria_id, $usado, $id);
    return $stmt->execute();
}

function removeProduto($conexao, $id) {
    $stmt = $conexao->prepare("delete from produtos where id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
