<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    Hello world!! shaon

    <ol>
        <?php foreach ($posts as $key => $value): ?>
        <li><?php echo $value; ?></li>
        <?php endforeach; ?>
    </ol>

</body>
</html>