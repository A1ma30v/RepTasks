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
// Создаем таблицу Users
$sql = "CREATE TABLE Users  (
    id INT(6)   PRIMARY KEY,
    name VARCHAR(30) NOT NULL ,
    surname VARCHAR(30) NOT NULL ,
    email     VARCHAR(60),
    reg_data TIMESTAMP 
                    )" ;


// Выводим сообщение об ошибке, если возникла ошибка при создании таблицы
if ($connection -> query($sql) === TRUE){
    echo "Таблица Users создана успешно";
} else {
    echo "Ошибка создания таблицы" . $connection->error;
}

// Закрываем подключение
$connection->close();

// Создаем таблицу UserOrders
$connection = new mysqli($servername, $username, $password, $database);
$sql = "CREATE TABLE UserOrders  (
    userid INT(6)   PRIMARY KEY,
    user_order VARCHAR(30) NOT NULL ,
    currency VARCHAR(3) NOT NULL ,
    reg_data TIMESTAMP 
                    )" ;

// Выводим сообщение об ошибке, если возникла ошипшебка при создании таблицы
if ($connection -> query($sql) === TRUE){
    echo "Таблица UserOrders создана успешно";
} else {
    echo "Ошибка создания таблицы" . $connection->error;
}

// Закрываем подключение снова
$connection->close();
?>