<?php
require_once('conecta.php');

function buscaUsuario($conexao, $email, $senha) {
    $senhaMd5 = md5($senha);
    // $email = mysqli_real_escape_string($conexao, $email);
    // $query = "SELECT * FROM usuarios WHERE email='{$email}' AND senha='{$senhaMd5}'";
    // $resultado = mysqli_query($conexao, $query);
    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email=? AND senha=?");
    $stmt->bind_param("ss", $email, $senhaMd5);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return mysqli_fetch_assoc($resultado);
}