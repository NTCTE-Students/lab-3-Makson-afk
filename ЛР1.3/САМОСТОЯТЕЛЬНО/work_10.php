<?php

$data = [
    ['Имя', 'Возраст', 'Город'],
    ['Сашка', 31, 'Нижний Тагил'],
    ['Лёшка', 24, 'Воронеж'],
    ['Игорян', 18, 'Екатеринбург'],
    ['Катька', 52, 'Ростов']
];

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";

foreach ($data[0] as $header) {
    echo "<th>" . htmlspecialchars($header) . "</th>";
}
echo "</tr>";

for ($i = 1; $i < count($data); $i++) {
    echo "<tr>";
    foreach ($data[$i] as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";