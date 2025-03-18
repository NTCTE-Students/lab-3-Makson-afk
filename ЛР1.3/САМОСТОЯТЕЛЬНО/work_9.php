<?php

$array = [1, 2, 3, 4, 5];
$elementToFind = 3;
$key = array_search($elementToFind, $array);
if ($key !== false) {

    echo "Элемент найден: " . $key;

} else {

    echo "Элемент не найден.";
}