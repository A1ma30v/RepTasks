<?php

echo '<h3>Создайте сценарий PHP, который отображает столицу и название страны из указанного выше массива $ceu.
 Отсортируйте список по названиям столиц.</h3><br>';

$ceu = array("Италия" => "Рим", "Люксембург" => "Люксембург", "Бельгия" => "Брюссель", "Дания" => "Копенгаген",
    "Финляндия" => "Хельсинки", "Франция " => "Париж", "Словакия" => "Братислава", "Словения" => "Любляна",
    "Германия" => "Берлин", "Греция" => "Афины", "Ирландия" => "Дублин", "Нидерланды" => "Амстердам",
    "Португалия" => "Лиссабон", "Испания" => "Мадрид", "Швеция" => "Стокгольм", "Великобритания" => "Лондон",
    "Кипр" => "Никосия", "Литва" => "Вильнюс", "Чехия" => "Прага", "Эстония" => "Таллин", " Польша " => "Варшава");


echo '<br>';
natcasesort($ceu);//natcasesort() сортирует массив привычным для человека образом, можно еще использовать asort().
foreach ($ceu as $county => $city) {
    echo 'Страна ' . $county . ' - Столица ' . $city . '<br>';
}
echo '<br>';

echo '<h3> Элемент из указанного массива PHP. После удаления элемента необходимо нормализовать целочисленные ключи.</h3> </br>';
echo '<br>';

$x = array(1, 2, 3, 4, 5);
print_r(var_dump($x));
unset($x[3]);// Удаляем число 4 из массива так как оно имеет индекс 3
echo '<br>';
sort($x); // Сортируем массив в порядке возрастания или array_values() возвращает массив со всеми элементами массива array, индексирует возвращаемый массив числовыми индексами.вопрос по сортировке
print_r('<h1>' . var_dump($x) . '</h1>');
echo '<br>';
echo "<h3>сценарий PHP, чтобы получить первый элемент указанного выше массива. array(4 => 'белый', 6 => 'зеленый', 11 => 'красный')</h3> . </br>";
echo '<br>';
$color = array(4 => 'белый', 6 => 'зеленый', 11 => 'красный');
echo reset($color) . '<br>'; // изначально сделал echo $color[4];
echo '<br>';
echo '<h3>Напишите сценарий PHP, который декодирует следующую строку JSON</h3>' . '<br>';

$jsonArray = '{"Заголовок": "Зов кукушки",
"Автор": "Роберт Гэлбрейт",
"Детали":
{ 
"Издатель": "Маленький Браун"
 }
  }';

function key_value($value, $key) // выводит ключ и значение массива
{
    echo $key . ': ' . $value . '.' . '<br>';
}

$result = json_decode($jsonArray, true);// декодируем код json
array_walk_recursive($result, 'key_value');// применяет функцию с конца массива , тем самым теряет ключ "Детали" ПОЧЕМУ???
// возможно потому что ключ "Издатель " принимает значение "Маленький Браун", а "Детали" остаются без значения
echo '<br>';


echo '<h3>Напишите сценарий PHP для сортировки следующего ассоциативного массива:
1 2 3 4 5
После вставки "$" массив будет:</h3>' . '<br>';

$numbers = ['один' => 1, 'два' => 2, 'три' => 3, 'четыре' => 4, 'пять' => 5];
$newChar = '$';
array_splice($numbers, 3, 0, $newChar);// array_splice удаляет часть массива и заменяет её чем-нибудь ещё, так как параметр length имеет значение 0 то он ничего не удаляет
// ПОЧЕМУ $numbers = array_splice($numbers, 3, 0, $newChar); УЖЕ НЕ РАБОТАЕТ???
foreach ($numbers as $number) {
    echo $number . ' ';
}
echo '<br>';

echo '<h3>Напишите сценарий PHP для сортировки следующего ассоциативного массива:' . ' <br>' . '
array ("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40")' . ' <br>' . '
а) сортировка по возрастанию по значению' . ' <br>' . '
б) по возрастанию сортировка по ключу' . ' <br>' . '
в) сортировка по убыванию по значению' . ' <br>' . '
г) сортировка по убыванию по ключу</h3>' . '<br>';
echo '<br>';
$sortArray = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
asort($sortArray); //сортируем значение массива по возрастанию
print_r($sortArray);
echo '</br>';
krsort($sortArray);//сортируем ключи массива по возрастанию
print_r($sortArray) . '<br>';
echo '</br>';
arsort($sortArray);//сортируем значение массива по убыванию
print_r($sortArray) . '<br>';
echo '</br>';
ksort($sortArray);//сортируем ключи массива по убыванию
print_r($sortArray) . '<br>';
echo '</br>';

echo '<h3>Напишите программу PHP для объединения (по индексу) следующих двух массивов.' . ' <br>' . '

Примеры массивов:' . ' <br>' . '
$array1 = array(array(77, 87), array(23, 45));' . ' <br>' . '
$array2 = array("wm-school", "ru");Ожидаемый результат:' . ' <br>' . '
Array ( [0] => Array ( [0] => wm-school [1] => 77 [2] => 87 ) [1] => Array ( [0] => ru [1] => 23 [2] => 45 ) )</h3>' . ' <br>';
$resultArray = [];
$array1 = [
    [77, 87],
    [23, 45]];
$array2 = array("wm-school", "ru");

// добавил по ключам , подумаю как переделать. Валера не ругайся
array_splice($array1[0], 0, 0, $array2[0]);
array_splice($array1[1], 0, 0, $array2[1]);
print_r($array1);


