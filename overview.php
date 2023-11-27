<?php 
include("Db/SQLite3.php");
$query = "SELECT * FROM expenses ORDER BY id ASC";
$result = $db->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Overview</title>
</head>
<header>
    <nav>
        <?php include "nav/nav.php" ?>
    </nav>
</header>
<div id="table">
    <body>
        <h1>Overview</h1>
        <table class="table">
            <thead>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th scope="col">Amount</th>
                <th scope="col">...</th>
            </thead>
            <tbody>
                <?php  
                    
                    while ($user_expenses = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $user_expenses['id'] . "</td>";  
                        echo "<td>" . $user_expenses['date'] . "</td>";  
                        echo "<td>" . $user_expenses['description'] . "</td>"; 
                        echo "<td>" . 'U$ ' . $user_expenses['amount']. "</td>"; 
                    };
                ?>
            </tbody>
        </table>
</div>
</body>
</html>