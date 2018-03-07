<?php
session_start();

function verifyUser() {
    if(!isTheUserLoggedIn()) {
        $_SESSION['danger'] = 'Você não possui acesso à essa funcionalidade!';
        header('Location: index.php');
        die();
    }
}

function isTheUserLoggedIn() {
    return isset($_SESSION['loggedUser']);
}

function getLoggedUser() {
    return $_SESSION['loggedUser'];
}

function logUser($email) {
    $_SESSION['loggedUser'] = $email;
}

function logout() {
    session_destroy();
    session_start();
}