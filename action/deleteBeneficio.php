
<?php
    require_once "../action/conecta.php";
    if(!isset($id)){
    die("erro ao deletar");
    }
    $res = pg_query($conexao, "DELETE FROM Beneficio WHERE id_beneficio = '$id_beneficio'");
?>