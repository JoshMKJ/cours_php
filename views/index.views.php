<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2m;
            text-align: center;
        }
    </style>
</head>
<body>

        <nav>
            <ul>
                <li><a href="/about.php">About page</a></li>
                <li><a href="/contact.php"> Contact</a></li>
            </ul>
        </nav>
    <h1>la tache du jour </h1>

    <?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
        <?php else :?>
            <?php endif;?>
    </li>

    <?php endforeach; ?>
</body>
</html>
