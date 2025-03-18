<?php

$numbers = [5, 3, 8, 1, 4];
sort($numbers);

echo "Массив по возрастанию: " . implode(", ", $numbers);
rsort($numbers);

echo "Массив по убыванию: " . implode(", ", $numbers);