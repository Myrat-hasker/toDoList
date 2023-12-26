<?
try{
    $title = $_POST['title'];
    $conn = new PDO('mysql:host=localhost;dbname=todo' , 'root', '');
    $sql = "INSERT INTO history (title, created_at) VALUES ('$title', NOW())";
    $conn->exec($sql);
    header('Location: /delete.php?id=' . $_POST['id']);
}catch(PDOException $e){
    echo($e);
}