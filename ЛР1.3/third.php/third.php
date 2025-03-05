<?php

$students = [
	[
		'name' => 'Алексей',
		'age' => 22,
	],
	[
		'name' => 'Мария',
		'age' => 20,
	],
	[
		'name' => 'Дмитрий',
		'age' => 23,
	],
];

$translate = [
	'name' => 'Имя',
	'age' => 'Возраст',
];

foreach($students as $student) {
    foreach($student as $key => $value) {
        print("{$translate[$key]}: {$value}");
    }
    print('<br>');
}