<?php 
try{

    $conn = new PDO('mysql:host=localhost;dbname=todo', 'root', '');
    $sql = 'SELECT * FROM history';
    $result = $conn->query($sql);
    while($row = $result->fetch()){
        $title = mb_strtolower($row['title']);
        $id = $row['id'];
        $sql_upd = "UPDATE history SET title = '$title' WHERE id = $id";
        $conn->exec($sql_upd);
    }
    echo 'success';

}catch(PDOException $e){
    echo $e;
}


?>