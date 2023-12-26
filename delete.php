<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=todo", "root", "");
    $id = $_GET["id"];
    $sql = "DELETE FROM tasks WHERE id = $id";
    $conn->exec($sql);
    header("Location: index.php");
}catch(PDOException $e){
    echo($e);
}
?>