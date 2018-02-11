<?PHP

$GLOBALS['caller_page'] = 'Display SQL';
//header
include 'Frame/head.php';

//connect to SQL
$connection = new mysqli('localhost', 'root', '', 'lesson_01');
//show error if exists
//echo 'var_dump($connection->error);';
//'var_dump($connection->error);
//query SQL
$result = $connection->query("SELECT * FROM `products` WHERE `price` BETWEEN 6 AND 12");
//var_dump($result);
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