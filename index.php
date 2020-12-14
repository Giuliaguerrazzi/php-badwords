<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci harum est sed necessitatibus.';
    $badword = $_GET['word'];
    $lenght_text = strlen($text);
    ?>

    <h1>Welcome Php</h1>

    <p><?php echo $lenght_text ?></p>

    <p><?php echo $text ?></p>

    <p>
    <? php echo str_replace($badword, '*****', $text) ?>
    </p>
</body>
</html>