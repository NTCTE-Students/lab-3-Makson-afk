<?php

$array = [1, 2, 2, 3, 4, 4, 5];

$uniqueArray = array_unique($array);

echo "Массив без дубликатов: " . implode(", ", $uniqueArray);
