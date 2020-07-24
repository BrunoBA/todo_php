<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "default";
$task = $_POST['task'];

if ($task != null) {
    try {
        $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO tasks (name) VALUES ('{$task}')";
    
        $conn->exec($sql);
        echo "Adicionado " . '\'<i>' . $task . '</i>\'';
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}


?>

<br>
<br>
<a href="/">Back</a>