<?php

    include 'connect_db.php';

    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $tel = $_POST['tel'] ?? null;
    $get_id = $_GET['id'] ?? null;

// Create
    if (isset($_POST['create'])) {
        $query = "INSERT INTO customers (name, email, tel) VALUES (?, ?, ?)";
        $result = $pdo->prepare($query);
        $result->execute(array($name, $email, $tel));
        if ($result) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

// Read
    $query = $pdo->prepare("SELECT * FROM customers");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);

// Update
if (isset($_POST['edit'])) {
    $query = "UPDATE customers SET name=?, email=?, tel=? WHERE id=?";
    $result = $pdo->prepare($query);
    $result->execute(array($name, $email, $tel, $get_id));
    if ($result) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

// Delete
if (isset($_POST['delete'])) {
    $query = "DELETE FROM customers WHERE id=?";
    $result = $pdo->prepare($query);
    $result->execute(array($get_id));
    if ($result) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

   