<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    require_once("../action/conecta.php");
    $resultado = pg_query($conexao,"select*from Evento where = '$id'");

    $dados = pg_fetch_array($rasultado);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../action/cadastra.php" method="post">
    <label for="nome">Nome do Evento</label>
    <input type="text" id="nomeEvento" name="nomeEvento" value="<?=$dados["nome"]?>">
    <label for="local">Local</label>
    <input type="text" id="local" name="local"value="<?=$dados["local"]?>">
    <label for="dtTermino ">Data do Termino</label>
    <input type="date" id="dtTermino " name="dtTermino "value="<?=$dados["dtTermino "]?>">
    <label for="dtInicio ">Data do Inicio</label>
    <input type="date" id="dtInicio " name="dtInicio "value="<?=$dados["dtInicio "]?>">
    <label for="preco">Preço do Evento</label>
    <input type="text" id="preco" name="preco"value="<?=$dados["preco"]?>">
    
    <button id="cadastrar" type="submit">Cadastrar</button>
</form>
</body>
</html>
