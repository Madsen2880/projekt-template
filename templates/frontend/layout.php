<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <nav>
        <a href="./" class="brand-logo">Projekt Template</a>
        <ul>
            <?php
            $result = $pdo->query('SELECT title, href FROM menu');

           while($row = $result->fetch(PDO::FETCH_ASSOC)){
                echo '            <li><a href="'.$row['href'].'">'.$row['title'].'</a></li>' . PHP_EOL;
            }

            ?>
        </ul>
    </nav>

    <?php

    $requestArray = getRequestArray(INPUT_GET);

    $includePath =  './templates/frontend/';
// her tjekker vi om siden vi har kaldt findes, hvis den gør vis den, hvis ikke gå til forside.
    if(isset($requestArray['page'])){
        $file =  $requestArray['page'] . '.php';
        includeTemplate($includePath, $file);
    }else{
        $file = 'forside.php';
        includeTemplate($includePath, $file);
    }

    ?>


    <footer>
        <p>&copy; <?=date('Y')?></p>
    </footer>

</body>
</html>