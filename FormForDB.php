<?php

$form =
    '<form action="" method="post"
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="surname">Фамилия:</label>
    <input type="text" id="surname" name="surname"><br><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>
    <label for="password">Пароль:</label>
    <input type="text" id="password" name="password"><br><br>
    <label for="name">Заказ:</label>
    <input type="text" id="order" name="order" ><br><br>
    <label for="currency">Валюта:</label>
    <input type="text" id="currency" name="currency" ><br><br>
    <input type="submit" value="Отправить">
</form>';
echo $form;

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $order = $_POST['order'];
    $curr = $_POST['currency'];

    $nameError = $surnameError = $emailError = $passError = $orderError = $currError = "";

    if (empty($name)) {
        $nameError = 'Введите  имя'. "<br>";
    }
    if (empty($surname)) {
        $surnameError = 'Введите  фамилию'. "<br>";
    }
    if (empty($email)) {
        $emailError = 'Введите email'. "<br>";
    }
    if (empty($pass)) {
        $passError = 'Введите  пароль'. "<br>";
    }
    if (empty($order)) {
        $orderError = 'Введите  заказ'. "<br>";
    }
    if (empty($curr)) {
        $currError = 'Введите  валюту'. "<br>";
    }

    // Выводим сообщения об ошибках
    echo $nameError;
    echo $surnameError;
    echo $emailError;
    echo $passError;
    echo $orderError;
    echo $currError;
}