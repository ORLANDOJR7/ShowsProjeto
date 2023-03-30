<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra Evento</title>
</head>
<body>
<form action="action/cadastra.php" method="post">
    <label for="nome">Nome do Evento</label>
    <input type="text" id="nomeEvento" name="nomeEvento">
    <label for="local">Local</label>
    <input type="text" id="local" name="local">
    <label for="dataterni">Data do Termino</label>
    <input type="date" id="dataterni" name="dataterni">
    <label for="datainic">Data do Inicio</label>
    <input type="date" id="datainic" name="datainic">
    <label for="preco">Preço do Evento</label>
    <input type="text" id="preco" name="preco">
    
    <button id="cadastrar" type="submit">Cadastrar</button>
</form>
</body>
</html>