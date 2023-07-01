<?php

include('db_connect.php');

try {

    $stmt = $pdo->prepare("DELETE FROM users WHERE email = :email");
    
    $email = $_POST['email'];

    $stmt->bindParam(':email', $email);

    echo('Було видалено користувача ');

    $stmt->execute();

    echo($email);

} catch (PDOException $e) {
    echo 'Помилка виконання запиту: ' . $e->getMessage();
}

?>