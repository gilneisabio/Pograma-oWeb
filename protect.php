<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Acesso NEGADO! Para acessar esta página voçe precisa estar logado.<p><a href=\"index.php\">Entrar</a></p>");
}


?>