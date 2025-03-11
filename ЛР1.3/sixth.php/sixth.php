<?php

// Создание массива
$fruits = ['Яблоко', 'Банан', 'Апельсин'];

// Сортировка массива
sort($fruits);

foreach($fruits as $fruit) {
    print("{$fruit}<br>");
}