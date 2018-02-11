<?php
$connection = new mysqli('localhost', 'root', '', 'lesson_01');

// var_dump($connection->error);

$prBetweenPrices = $connection->query("SELECT * FROM `products` WHERE `price` BETWEEN 6 AND 12");
$prRed = $connection->query("SELECT * FROM `products` WHERE Color = 'red' ORDER BY Price");
$puY_I = $connection->query("SELECT * FROM `purchases` WHERE name='Avi' OR name='Dave'");

$result1 = createArray($puY_I);

//var_dump($result1);

function createArray($db) {
    $rows = [];
    while ($row = $db->fetch_assoc()) {
        $rows [] = $row;
    }
    return $rows;
}

function CreateTable($result1) {
    foreach ($result1 as $rowIndex => $row) {
        if ($rowIndex == 0) {
            echo "<thead><tr>";
            foreach ($row as $columnName => $cell) {
                if (strpos($columnName, "field") === true) {
                    echo "<td>$columnName</td>";
                }
            }
            echo "</tr></thead>";
        }
        echo "<tr>";
        foreach ($row as $columnName => $cell) {
            if (strpos($columnName, "field") === true) {
                echo "<td>$cell</td>";
            }
        }
        echo "</tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body {
                background-color: #74994e;
            }
            p {
                white-space: pre;
            }
        </style>
    </head>
    <body>
        <h1>Data Analysis</h1>
        <h2>Prices between 400-500:</h2>
        <table>
            <?php echo CreateTable($result1); ?>
        </table>

        <h2></h2>
        <p>
            <?php #findDetailsFromNames($Y, $I, $rowsPu);   ?>
        </p>
    </body>
</html>