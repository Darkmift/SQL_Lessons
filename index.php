<?PHP

$GLOBALS['caller_page'] = 'Display SQL';
//header
include 'Frame/head.php';
?>
<?php

//connect to SQL
$connection = new mysqli('localhost', 'root', '', 'sql_lessons');
//show error if exists
//echo 'var_dump($connection->error);';
//'var_dump($connection->error);
//query SQL
$result = $connection->query("SELECT * FROM products");
//init rows,used to take info of result
$rows = [];
//build rows with iteration for each table row as associative array and add to rows
while ($row = $result->fetch_assoc()) {
    $rows [] = $row;
}
// var_dump($rows);
//body
echo '<table class="table table-striped">';
foreach ($rows as $row) {
    echo '<tr><td>' . $row['name'] . '</td><td>' . $row['color'] . '</td><td>' . $row['price'] . '</td></tr>';
}
echo '</table>';
//footer
include 'Frame/footer.php';
?>