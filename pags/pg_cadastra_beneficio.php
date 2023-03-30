<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Benefício</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form >
        <label >Beneficio</label>
        <label for="id_beneficio">ID Beneficio</label>
        <input type="number" name="id_beneficio" placeholder="ID Beneficio">
        <label for="valor_beneficio">Valor do Benefício</label>
        <input type="number" name="valor_beneficio" placeholder="Valor do Beneficio">
        <label for="evento_fk">Número do Evento</label>
        <input type="number" name="evento_fk" placeholder="Número do Evento">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" placeholder="Descrição">

        <button id="cad_beneficio" type="submit" action="action/pg_cadastra_beneficio.php" method="post">Cadastrar</button>
    </form>
</body>
</html>