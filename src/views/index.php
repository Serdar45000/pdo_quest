<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="/src/css/style.css">
        <title>List of all my best FRIENDS !!!</title>
    </head>
    <body>
        <section>
            <h1>List of all my best FRIENDS !!!</h1>
                <ul>
                    <?php foreach ($friends as $friend) : ?>
                    <li>
                            <?= $friend['firstname'] . ' ' . $friend['lastname']; ?>                
                    </li>
                    <?php endforeach ?>
                </ul>
        </section>
    </body>
</html>