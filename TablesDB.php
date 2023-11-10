<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "newDB";
// создаем подключение к дб.
$connection = new mysqli($servername, $username, $password, $database);
// проверка соединение на ошибки.
if ($connection->connect_error) {
    die("Ошибка соединения " . $connection->connect_error); //если подключение не удалось выводим сообщение
}
// Создаем базу данных
$sql = "CREATE DATABASE $database"; // Создаем SQL-запрос для создания бд
if ($connection->query($sql) === TRUE) {
    echo "ДБ создана успешно"; // Выводим сообщение, если бд создана успешно
} else {
    echo "Ошибка создания ДБ: " . $connection->error; // Выводим сообщение об ошибке, если возникла ошибка при создании бд
}

// Закрываем подключение
$connection->close(); // Закрываем соединение с бд