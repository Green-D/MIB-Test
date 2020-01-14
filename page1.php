<?php
session_start();


if (isset($_POST['animal1']) or empty($_SESSION['answer1'])) {
$_SESSION['answer1'] = $_POST['animal1'];
}

if (empty($_SESSION['answer1'])) {
  $_SESSION['error'] = 'Пожалуйста, выберите ответ.';
  header('Location: index.php');
  return;
}


echo "<pre>";
print_r($_SESSION);
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
<h1 style="text-align: center">Вопрос №2</h1>
<p>Выберите животное, которое блеет, и очень "шерстяное".</p>
<div>
    <form action="page2.php" method="post">
        <input type="radio" name="animal2" value="хрюшка">Хрюшка<br>
        <input type="radio" name="animal2" value="коняшка">Коняшка<br>
        <input type="radio" name="animal2" value="овечка">Овечка<br><br>
        <input type="submit" value="Отправить">
    </form>
    <p><?php
        echo $_SESSION['error'];
        unset($_SESSION['error']);
        ?></p>
</div>
</body>
</html>
