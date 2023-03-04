<?php
    require_once "banco.php";
    require_once "tabelas.php";

    if (!isset($_POST['aceito'])) {
        $_POST['aceito'] = "Não aceito";
    }

    insert_dados();

    header("Location: cadastroo.php");
?>