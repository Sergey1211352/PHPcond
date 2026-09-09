<?php
function drawMenu($menu, $vertical = true) {
    if ($vertical) {
        echo "<ul style='list-style-type: none; padding: 0;'>";
        foreach ($menu as $title => $link) {
            echo "<li style='margin-bottom: 5px;'><a href='{$link}'>{$title}</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<ul style='list-style-type: none; padding: 0; display: flex; gap: 20px;'>";
        foreach ($menu as $title => $link) {
            echo "<li><a href='{$link}'>{$title}</a></li>";
        }
        echo "</ul>";
    }
}

$mainMenu = [
    'Главная' => 'index.php',
    'О нас' => 'about.php',
    'Услуги' => 'services.php',
    'Контакты' => 'contacts.php'
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
    <h1>Главная страница сайта</h1>
    
    <nav>
   
        <?php
      
        drawMenu($mainMenu, false); 
        ?>
    </nav>

</body>
</html>