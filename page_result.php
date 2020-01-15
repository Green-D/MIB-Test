<?php
session_start();

if (isset($_POST['animal3']) or empty($_SESSION['answer3'])) {
$_SESSION['answer3'] = $_POST['animal3'];
}

if (empty($_SESSION['answer3'])) {
  $_SESSION['error'] = 'Пожалуйста, выберите ответ.';
  header('Location: page2.php');
  return;
}

$answers = ['task_1' => 'хрюшка', 'task_2' => 'овечка', 'task_3' => 'коняшка'];
$useranswers = ['task_1' => $_SESSION['answer1'],
'task_2' => $_SESSION['answer2'],
'task_3' => $_SESSION['answer3']];

if ($answers == $useranswers) {
    $result = 'Поздравляем, возьмите с полки пирожок!';
} else {
    $result = 'Как бы не так! Работа в ЛВЧ не для Вас!';
}

session_destroy();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<h1 style="text-align: center">Страница результатов</h1>
<p><?=$result?></p>
<div>
    <form action="index.php" method="post">

        <input type="submit" value="Пройти задание снова">

    </form>
    <?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
</div>
</body>
</html>
