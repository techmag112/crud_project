<?php 

    include 'connect_db.php';

    if (isset($_POST['create'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $query = "INSERT INTO `customers` (`name`, `email`, `tel`) VALUES (?, ?, ?)";
        $result = $pdo->prepare($query);
        $result->execute(array($name, $email, $tel));
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
