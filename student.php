<?php
    require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
    <div>
        <form action="backend.php" method="post">
            <input type="number" name="rollno" placeholder="ROll No."><br>
            <input type="text" name="name" placeholder="name"><br>
            <input type="submit" name="submit" placeholder="submit"><br>
        </form>
        <a href="index.html">Go to Home Page!</a>
    </div>
</body>
</html>