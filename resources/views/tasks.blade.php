<!doctype html>

<title>My first app - Tasks</title>
<link rel="stylesheet" href="/app.css">

<body>
    <h1>These are the tasks</h1>
    <a href="/">Go back to home</a>

    <?php foreach ($tasks as $task) : ?>
    <article>
        <?= $task ?>
    </article>
    <?php endforeach; ?>
</body>
