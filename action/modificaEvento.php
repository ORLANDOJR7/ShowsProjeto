<?php
require_once("conecta.php");
if(isset($_POST["nome"])&& isset($_POST["local"])&& isset($_POST["dtTermino"])&& isset($_POST["dtInicio"])&& isset($_POST["precoEvento"])&& isset($_POST["id_evento"])){
    $nomeEvento = $_POST["nome"];
    $local = $_POST["local"];
    $dtTermino = $_POST["dtTermino"];
    $dtInicio = $_POST["dtInicio"];
    $preco = $_POST["precoEvento"];
    $id = $_POST["id_evento"];
    pg_query($conexao,"update evento set nome ='$nome',local='$local',dtTermino='$dtTermino',dtInicio='$dtInicio',precoEvento='$preco' where id_evento='$id_evento'");
}
?>
