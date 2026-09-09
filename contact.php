<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Обратная связь</h1>
    <!-- Заголовок -->
<<<<<<< HEAD
    <!-- Область основного контента -->
    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
=======
    
    <!-- Область основного контента -->
    <?php
    $postSizeStr = ini_get('post_max_size');
    $lastLetter = strtoupper(substr($postSizeStr, -1));
    $sizeValue = (int)$postSizeStr;

    switch ($lastLetter) {
        case 'G':
            $size = $sizeValue * 1024 * 1024 * 1024;
            break;
        case 'M':
            $size = $sizeValue * 1024 * 1024;
            break;
        case 'K':
            $size = $sizeValue * 1024;
            break;
        default:
            $size = $sizeValue;
    }
    ?>

    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    
>>>>>>> 537e410138d7a7c18737536fcbbdd8413ec73600
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>
<<<<<<< HEAD
    <!-- Область основного контента -->
  </div>
=======
    
    <p>Максимальный размер отправляемых данных <?= $size ?> байт.</p>
    <!-- Область основного контента -->
  </div>

>>>>>>> 537e410138d7a7c18737536fcbbdd8413ec73600
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
<<<<<<< HEAD
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
    <!-- Меню -->
  </div>
=======
      <li><a href='index.php'>Домой</a></li>
      <li><a href='about.php'>О нас</a></li>
      <li><a href='contact.php'>Контакты</a></li>
      <li><a href='table.php'>Таблица умножения</a></li>
      <li><a href='calc.php'>Калькулятор</a></li>
    </ul>
    <!-- Меню -->
  </div>

>>>>>>> 537e410138d7a7c18737536fcbbdd8413ec73600
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2021
    <!-- Нижняя часть страницы -->
  </div>
<<<<<<< HEAD
=======

>>>>>>> 537e410138d7a7c18737536fcbbdd8413ec73600
</body>

</html>