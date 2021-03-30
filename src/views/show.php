<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="/src/css/style.css">
        <title><?= $friend['firstname'] ?></title>
    </head>
    <body>
        <section>
            <a href="/">Home</a>
            <h1><?= $friend['firstname'] . ' ' . $friend['lastname'] ; ?></h1>
        </section>
    </body>
</html>