<?php

    include 'connect_db.php';

    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $tel = $_POST['tel'] ?? null;
    $get_id = $_GET['id'] ?? null;
    
    if (isset($_POST['create'])) {
        requestRun($pdo, "INSERT INTO customers (name, email, tel) VALUES (?, ?, ?)", array($name, $email, $tel));
        unset($_POST['create']);
    };

    if (isset($_POST['edit'])) {
        requestRun($pdo, "UPDATE customers SET name=?, email=?, tel=? WHERE id=?", array($name, $email, $tel, $get_id));
        unset($_POST['edit']);
    };

    if (isset($_POST['delete'])) {
        // Запись не удаляем, а помечаем для удаления, чтобы можно было восстановить
        requestRun($pdo, "UPDATE customers SET flag = 1 WHERE id=?", array($get_id));
        unset($_POST['delete']);
    };

    $query = $pdo->prepare("SELECT * FROM customers WHERE flag = 0");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);

    function requestRun($db, $sqlString, $arr) {
        $result = $db->prepare($sqlString);
        $result->execute($arr);
        // Обновить страницу
        if ($result) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }