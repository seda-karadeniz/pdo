<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tous les utilisateurs</title>
</head>
<body>
<?php if($users): ?>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><a href="?id=<?= $user->id ?>"><?= $user->fullname ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>