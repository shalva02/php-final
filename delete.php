<?php  
    require_once './connection.php';
?>

<!DOCTYPE html>
<html lang="en">


    <?php 
        $id = $_GET['id'];
        $sql = "DELETE FROM vakansiebi WHERE id=" . $id;
        $conn->exec($sql);
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>წაშლა</title>
    </head>

    <body>
        <div class="jumbotron">
            ადმინი ID <? echo $_GET['id'] ?> წაიშალა !!!
        </div>
    </body>

    </html>