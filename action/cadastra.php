<?php

$nome = $_POST["nomeEvento"];
$local = $_POST["local"];
$dataterni = $_POST["dataterni"];
$datainic = $_POST["datainic"];
$preco = $_POST["preco"];
//modifica

require_once "conecta.php"; 

if(!$conexao){
    die("ERRO AO CONECTAR COM O BANCO");
}
$datainic=date('y-n-d',strtotime($dataterni));
$dataterni=date('y-n-d',strtotime($dataterni));
$result = pg_query($conexao, "INSERT INTO evento (nome, local, dttermino, dtinicio, precoevento) VALUES ('$nome', '$local', '$dataterni', '$datainic', '$preco')");

if (!$result) {
    die("Erro ao cadastrar");
} else {
    echo "Cadastrado com sucesso!";
}

?>
