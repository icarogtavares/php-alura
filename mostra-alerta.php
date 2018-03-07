<?php
session_start();
function showAlert($tipo) {
    if(isset($_SESSION[$tipo])) { ?>
        <p class='alert-success'> <?=$_SESSION[$tipo]?></p>
<?php
        unset($_SESSION[$tipo]);
    }
}