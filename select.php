<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="insert.php">Inserir um novo registro</a>
    <hr />
</body>
</html>
<?php

include_once 'conexao.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);
try{
    
    $sql = 'SELECT * FROM user ORDER BY id';

    foreach ($conn->query($sql) as $row) {

        # code...
        echo 'Id: '.$row['id'].' nome: '.$row['Nome'].' sexo: '.$row['Sexo'].' cidade: '.$row['Cidade'];
        //$deletUrl = "".$row['id'];
        print  "<a href=delete.php?id=".$row['id']."> Deletar</a>";
        print '<hr />';
    }
    
}catch(PDOException $e){
    $e->getMessage();
}
?>