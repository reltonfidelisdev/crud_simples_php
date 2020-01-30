<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php 
include_once 'conexao.php';
try{
    //$conn = new PDO("mysql:host=localhost;dbname=crud","root","Passw0rd");

    //Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $id = addslashes(trim($_GET['id']));
    $nome = addslashes(trim($_GET['nome']));
    $sexo = addslashes(trim($_GET['sexo']));
    $cidade = addslashes(trim($_GET['cidade']));
    //Prepare sql and bind values
    $updateUser = $conn->prepare("UPDATE user SET nome=:nome, sexo=:sexo, cidade=:cidade WHERE ID=:id");
    $updateUser->bindParam(':id',$id);
    $updateUser->bindValue(':nome', $nome);
    $updateUser->bindValue(':sexo', $sexo);
    $updateUser->bindValue('cidade', $cidade);

    $updateUser->execute();
    header('Location: select.php');

}catch(PDOExeption $e){
    return $e->getMessage();
}

?>