<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=todo", "root", "");
    if($title = $_POST["title"]){
        $sql = "INSERT INTO tasks (title, created_at) VALUES ('$title', NOW())";
        $conn->exec($sql);
        header("Location: index.php");
    }else{
        header('Location:index.php');
    }

}catch(PDOException $e){
    echo($e);
}


// $sql = "INSERT INTO tasks ('title', 'description', 'date') VALUES ()";
?>