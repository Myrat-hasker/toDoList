<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>To do list</title>
</head>
<body>  
        <div class="nav">
            <a href="/"><div class="pages pushed">
                <p>Main</p>
            </div></a>

            <a href="/history.php"><div class="pages">
                <p>History</p>
            </div></a>
        </div>  
        <div class="container">
            <div class="card">
                <form action="add.php" class="form" method="POST">
                    <input type="text"  name="title" placeholder="Title" autofocus>
                    <button type="submit">+</button>
                </form>
            </div>

            <div class="card">
                <?php
                try{
                    $conn = new PDO("mysql:host=localhost;dbname=todo;", "root", "");
                    $sql = "SELECT * FROM tasks";
                    $result = $conn->query($sql);

                        echo("<table>");
                        while($row = $result->fetch()){
                            echo('<tr><td><span>' . $row['title'] . '</span ></td>
                            <td class="x"><form class="done" method="POST" action="archive.php">
                            <input type="hidden" name="id" value="' . $row["id"] . '">
                            <input type="hidden" name="title" value="' . $row["title"] . '">
                            <button type="submit">Done</button></form></td>
                            <td class="x"><a href="/delete.php?id=' . $row['id'] . '">X</a></td></tr>');
                        }
                        echo("</table>");
                    
                }catch (PDOException $e){
                    echo($e);
                }

                ?>
            </div>
        </div>   
    
</body>
</html>