<?php

//    echo($_POST['email']);

//    echo($_POST['password']);

include('db_connect.php');

$query = "SELECT * FROM users WHERE email = :email OR username = :username ";

$email = strval($_POST['email']);
$username = strval($_POST['username']);
$password = strval($_POST['password']);

try {

    $statement = $pdo->prepare($query);
    $statement->bindValue(':username', $username, PDO::PARAM_STR);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if($result){

        header("Location: error.php");

    } else {

        $stmt = $pdo->prepare("INSERT INTO users (email, username, password) VALUES (:email, :username, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        session_start();

        $_SESSION['name'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;

        header("Location: user_cabinet.php");

        
    }

} catch (PDOException $error) {
    die("Помилка при виконанні запиту: " . $error->getMessage());
}

?>