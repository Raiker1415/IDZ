<?php

    include('db_connect.php');

    try {

        $stmt = $pdo->prepare("UPDATE users SET username = :username, password = :password WHERE email = :email");
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':username', $username);

        echo('Було змінено користувача ');
        echo($email);
        echo(' на ');
        echo($email . ' ' . $username . ' ' . $password . ' ');
        $stmt->execute();

        

    } catch (PDOException $e) {
        echo 'Помилка виконання запиту: ' . $e->getMessage();
    }

    include('admin_cabinet.php');

?>