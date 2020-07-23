<?php
$servername = "db";
$username = "default";
$password = "default";
$dbname = "default";

try {
    $tasks = [];
    $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT name FROM tasks";
    $result = $conn->query($sql);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $tasks[] = $row['name'];
    }

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="/add.php">
        <label for="fname">Task:</label><br>
        <input type="text" id="task-name" name="task" value="">
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php if (count($tasks) > 0) { ?>
        <ul>
            <?php foreach ($tasks as $task) { ?>
                <li> <?php echo $task ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
</body>

</html>