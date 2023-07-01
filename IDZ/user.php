<?php
include 'db_connect.php';

// Отримати дані користувача з бази даних
function getUserData($email) {
    global $dbh;
    
    $stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $result;
}
?>

<!-- HTML-код для відображення профілю користувача -->
<!DOCTYPE html>
<html>
<head>
    <title>Профіль користувача</title>
</head>
<body>
    <?php
    // Перевірка, чи користувач увійшов у систему
    session_start();
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $userData = getUserData($email);
        if ($userData) {
            echo "<h2>Привіт, " . $userData['username'] . "!</h2>";
            echo "<p>Електронна пошта: " . $userData['email'] . "</p>";
            echo "<p><a href=\"logout.php\">Вийти</a></p>";
        } else {
            echo "Помилка: Користувач не знайдений.";
        }
    } else {
        echo "Помилка: Користувач не увійшов у систему.";
    }
    ?>
</body>
</html>
