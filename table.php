<?php
function drawTable($cols, $rows, $color) {
    echo "<table border='1' style='border-collapse: collapse; text-align: center; width: 50%'>";
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $cols; $j++) {
          
            if ($i == 1 || $j == 1) {
                echo "<td style='background-color: {$color}; font-weight: bold; padding: 10px;'>" . ($i * $j) . "</td>";
            } else {
                echo "<td style='padding: 10px;'>" . ($i * $j) . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

$cols = rand(1, 10);
$rows = rand(1, 10);
$tableColor = "#d1e7dd";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
</head>
<body>
    <h1>Таблица умножения ($cols на $rows)</h1>
    
  
    <?php

    drawTable($cols, $rows, $tableColor);
    ?>

</body>
</html>