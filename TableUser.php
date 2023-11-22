<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "newDB";
// Устанавливаем параметры подключения к базе данных

$connection = new mysqli($servername, $username, $password, $database);
// Создаем новый объект для подключения к базе данных с помощью параметров

if ($connection->connect_error) {
    die("Ошибка соединения " . $connection->connect_error);
}
// Проверяем, есть ли ошибки при установлении соединения. Если есть, выводим сообщение и завершаем скрипт

$tableName = "Users";
$query = "DESCRIBE $tableName";
$resultUsers = $connection->query($query);
// Выполняем запрос DESCRIBE для таблицы Users и сохраняем результат в переменной $resultUsers

if ($resultUsers->num_rows > 0) {
    echo $tableName . ' существует ';
} else {
    // Если таблица Users не существует, создаем таблицу
    $sql = "CREATE TABLE Users  (
        id INT(6) PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        surname VARCHAR(30) NOT NULL,
        email VARCHAR(60) NOT NULL, 
        password VARCHAR(30) NOT NULL,
        reg_data TIMESTAMP 
    )";
    // Создаем SQL-запрос для создания таблицы Users

    if ($connection->query($sql) === TRUE) {
        echo "Таблица Users создана успешно";
    } else {
        echo "Ошибка создания таблицы" . $connection->error;
    }
    // Выполняем SQL-запрос на создание таблицы Users и выводим сообщение об успехе или ошибке
}

$tableName = "UserOrders";
$query = "DESCRIBE $tableName";
$resultUserOrders = $connection->query($query);
// Выполняем запрос DESCRIBE для таблицы UserOrders и сохраняем результат в переменной $resultUserOrders

if ($resultUserOrders->num_rows > 0) {
    echo $tableName . ' существует ';
} else {
    // Если таблица UserOrders не существует, создаем таблицу
    $sql = "CREATE TABLE UserOrders  (
        user_id INT(6) PRIMARY KEY,
        user_order VARCHAR(30) NOT NULL,
        currency VARCHAR(3) NOT NULL,
        reg_data TIMESTAMP 
    )";
    // Создаем SQL-запрос для создания таблицы UserOrders

    if ($connection->query($sql) === TRUE) {
        echo "Таблица UserOrders создана успешно";
    } else {
        echo "Ошибка создания таблицы" . $connection->error;
    }
    // Выполняем SQL-запрос на создание таблицы UserOrders и выводим сообщение об успехе или ошибке
}
// Закрываем соединение с базой данных
$connection->close();
