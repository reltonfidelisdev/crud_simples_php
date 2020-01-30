<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php 
include_once 'conexao.php';
try{ 
    $nome = "Relton";
    $sexo = "M";
    $cidade = "Recife";
    //Prepare sql and bind parameters
    $insertUser = $conn->prepare("INSERT INTO user (Nome, Sexo, Cidade) VALUES(:nome, :sexo, :cidade)");
    $insertUser->bindParam(':nome', $nome);
    $insertUser->bindParam(':sexo', $sexo);
    $insertUser->bindParam('cidade', $cidade);

    $insertUser->execute();
    header('Location: select.php');
}catch(PDOExeption $e){
    return $e->getMessage();
}

?>