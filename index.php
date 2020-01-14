<?php
session_start();

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<h1 style="text-align: center">Вопрос №1</h1>
<p>Выберите животное, которое хрюкает, и любит жевать жёлуди.</p>
<div>
    <form action="page1.php" method="post">
        <input type="radio" name="animal1" value="хрюшка">Хрюшка<br>
        <input type="radio" name="animal1" value="коняшка">Коняшка<br>
        <input type="radio" name="animal1" value="овечка">Овечка<br><br>
        <input type="submit" name="submit" value="Отправить">
    </form>
    <p><?php
    echo $_SESSION['error'];
    unset($_SESSION['error']);
    ?></p>
</div>
</body>
</html>
