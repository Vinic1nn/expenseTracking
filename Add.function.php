<?php 
include "Db/SQLite3.php";
$table = 'expenses';


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST["date"];
    $description = $_POST["description"];
    $amount = $_POST["amount"];
}

$data = [$date,$description,$amount];


add_expense($data,$table,$db);

?>

<button onclick="backToIndex()">BACK!</button>

<script>
function backToIndex() {
    window.location.href = 'index.php';
}
</script>



