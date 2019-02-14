<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Написать класс init</title>
</head>
<body>

<?php require_once 'Database.php'; ?>
<?php require_once 'MyInit.php'; ?>

<?php $request = new MyInit(); ?>
<?php $rows = $request->get(); ?>

<main>
    <section>
        <h1>Задача</h1>
        <p>Написать класс init, от которого нельзя сделать наследника, состоящий из 3 методов</p>
        <?php foreach ($rows as $row): ?>
        <ul>
            <li>
                <b>ID:</b> <?php echo $row['id']; ?>
            </li>
            <li>
                <b>Script Name:</b> <?php echo $row['script_name']; ?>
            </li>
            <li>
                <b>Start time:</b> <?php echo $row['start_time']; ?>
            </li>
            <li>
                <b>End time: </b> <?php echo $row['end_time']; ?>
            </li>
            <li>
                <b>Result: </b> <?php echo $row['result']; ?>
            </li>
        </ul>
        <?php endforeach; ?>
    </section>
</main>
</body>
</html>