<?php

$person = [
	'name' => 'Иван',
	'age' => 25,
	'city' => 'Москва'
];

$translate = [
	'name' => 'Имя',
	'age' => 'Возраст',
	'city' => 'Москва',
];

foreach($person as $key => $value) {
    print("{$translate[$key]}: {$value}<br>");
}