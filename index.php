<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Expense Tracking</title>
</head>
<header>
    <nav>
        <?php include "nav/nav.php" ?>
    </nav>
</header>
<body>
    <h1>Home</h1>
    <div id="add">
        <h2>Add a expense</h2>
        <form action="Add.function.php" method="post" >
            <span>Date:</span>
            <input type="date" name="date"><br>
            <span>Description:</span>
            <input type="text" name="description"><br>
            <span>Amount:</span>
            <input type="float" name="amount"><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>