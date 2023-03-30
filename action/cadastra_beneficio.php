<?php
    $id_beneficio = $_POST["id_beneficio"];
    $valor_beneficio = $_POST["valor_beneficio"];
    $evento_fk = $_POST["evento_fk"];
    $descricao = $_POST["descricao"];

    require_once("conecta.php");
    $result = pg_query($conexao, "INSERT INTO beneficio (valor_beneficio, evento_fk, descricao) VALUES ('$id_beneficio', '$valor_beneficio', '$evento_fk', '$descricao')");
?>