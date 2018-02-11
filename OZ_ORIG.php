<?php
$connection = new mysqli('localhost', 'root', '', 'lesson_01');

// var_dump($connection->error);

$prBetweenPrices = $connection->query("SELECT * FROM `products` WHERE `price` BETWEEN 6 AND 12");
$prRed = $connection->query("SELECT * FROM `products` WHERE Color = 'red' ORDER BY Price");
$puY_I = $connection->query("SELECT * FROM `purchases` WHERE name='Avi' OR name='Dave'");

$result1 = createArray($prBetweenPrices);

//var_dump($result1);

function createArray($db) {
    $rows = [];
    while ($row = $db->fetch_assoc()) {
        $rows [] = $row;
    }
    return $rows;
}

function CreateTable($array_name) {
    echo '<thead>';
    foreach (array_keys($array_name[0]) as $key => $value) {
        echo '<th>' . $value . '</th>';
    }
    echo '</thead>';
    echo'<tbody>';
    //print_r($result1);
    foreach ($array_name as $rowIndex => $row) {
        echo '<tr>';
        foreach ($row as $columnName => $cell) {
            echo "<td>$cell</td>";
        }
        echo'</tr>';
    }
    echo'</tbody>';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>OZ_ORIG</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body {
                background-color: #74994e;
            }
            p {
                white-space: pre;
            }
            table,tr,th,td{
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <h1>Data Analysis</h1>
        <h2>Prices between 400-500:</h2>
        <table>
            <?php
            CreateTable($result1);
            ?>
        </table>

        <h2></h2>
        <p>
            <?php
            #findDetailsFromNames($Y, $I, $rowsPu);  
            ?>
        </p>
    </body>
</html>