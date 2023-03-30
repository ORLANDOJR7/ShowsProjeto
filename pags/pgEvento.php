<?php 
    require_once("../action/conecta.php");

    $tab = "";

    $q = pg_query($conexao,"select*from evento");

    while($dados = pg_fetch_array($q)){
        $tab .= "<tr>
                <td>".$dados["id_evento"]."</td>
                <td>".$dados["nome"]."</td>
                <td>".$dados["local"]."</td>
                <td>".$dados["dtInicio"]."</td>
                <td>".$dados["dtTermino"]."</td>
                <td>".$dados["precoEvento"]."</td>
                </tr>";
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
    <table>
        <tr><th>Id</th> <th>Nome</th> <th>Local</th> <th>Data de inicio</th> <th>Data do fim</th> <th>Valor</th></tr>
        <?=$tab?>
    </table>
</body>
</html>