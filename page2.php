<?php
session_start();

if (isset($_POST['animal2']) or empty($_SESSION['answer2'])) {
$_SESSION['answer2'] = $_POST['animal2'];
}

if (empty($_SESSION['answer2'])) {
  $_SESSION['error'] = 'Пожалуйста, выберите ответ.';
  header('Location: page1.php');
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
<h1 style="text-align: center">Вопрос №3</h1>
<p>Выберите животное, которое ржёт и любит брыкаться.</p>
<div>
    <form action="page_result.php" method="post">
        <label><input type="radio" name="animal3" value="хрюшка">Хрюшка</label><br>
        <label><input type="radio" name="animal3" value="коняшка">Коняшка</label><br>
        <label><input type="radio" name="animal3" value="овечка">Овечка</label><br><br>
        <input type="submit" value="Проверить результат">
    </form>
    <p><?php
        echo $_SESSION['error'];
        unset($_SESSION['error']);
        ?></p>
</div>
</body>
</html>
