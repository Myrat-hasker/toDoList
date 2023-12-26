<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
<div class="nav">
            <a href="/"><div class="pages">
                <p>Main</p>
            </div></a>

            <a href="/archive.php"><div class="pages">
                <p>History</p>
            </div></a>
        </div>  
        <div class="container">
            <div class="card">
                <?
                try{
                    $conn = new PDO('mysql:host=localhost;dbname=todo' , 'root', '');
                    $sql = "SELECT * FROM history";
                    $result = $conn->query($sql);
                
                    while($row = $result->fetch()){
                        echo('<p>' . $row['title'] . '</p>');
                    }
                }catch(PDOException $e){
                    echo($e);
                }
                ?>
            </div>

        </div>

</body>
</html>