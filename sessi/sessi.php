<?php 
/*1-2  session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['userData'] = [
        'name' => $_POST['name'] ?? '',
        'age' => $_POST['age'] ?? '',
        'salary' => $_POST['salary'] ?? '',
        
    ];
    header('Location: dop.php');
    exit;
} */
/* 3 session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$products = [
    ['id' => 1, 'name' => 'Товар 1', 'price' => 100],
    ['id' => 2, 'name' => 'Товар 2', 'price' => 200],
    ['id' => 3, 'name' => 'Товар 3', 'price' => 300],
]; */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 1-2 <h1>Введите ваши данные</h1>
    <form method="POST" action="sessi.php">
        <p>
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>
        </p>
        <p>
            <label for="age">Возраст:</label>
            <input type="number" id="age" name="age" required>
        </p>
        <p>
            <label for="salary">Зарплата:</label>
            <input type="number" id="salary" name="salary" required>
        </p>
        <p>
            <input type="submit" value="Отправить">
        </p>
    </form>
     -->
    <!--  3<h1>Товары</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <?php endforeach; ?>
            </ul> -->
    
</body>
</html>