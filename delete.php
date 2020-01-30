<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php 

try{
    $conn = new PDO("mysql:host=localhost;dbname=crud","root","Passw0rd");

    //Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //Prepare sql and bind parameters
    $id = $_GET['id'];
    $deleteUsuario = $conn->prepare("DELETE FROM user WHERE ID=:id");
    $deleteUsuario->bindValue(":id", $id);
    $deleteUsuario->execute();
    header('Location: select.php');

}catch(PDOExeption $e){
    return $e->getMessage();
}

?>