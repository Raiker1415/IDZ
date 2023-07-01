<?php
session_start();

// Перевірка, чи аутентифікований адміністратор
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// З'єднання з базою даних
require_once 'db_connect.php';

// Отримання даних усіх зареєстрованих користувачів
$query = "SELECT * FROM users";
$stmt = $pdo->query($query);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Сторінка адміністратора</title>
</head>
<body>
    <h1>Сторінка адміністратора</h1>

    <h2>Зареєстровані користувачі</h2>
    <table>
        <tr>
            <th>Логін</th>
            <th>Пароль</th>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['password']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <br>

    <a href="logout.php">Вийти</a>
</body>
</html>