<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Написать класс init</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php require_once 'Database.php'; ?>
<?php require_once 'MyInit.php'; ?>

<?php $request = new MyInit(); ?>
<?php $rows = $request->get(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Задача</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>Написать класс init, от которого нельзя сделать наследника, состоящий из 3 методов</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3>
                Элементов 'normal' и 'success'
                <span class="badge badge-secondary"><?php echo count($rows); ?></span>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php foreach ($rows as $row): ?>
                <div class="alert alert-primary">
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
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</body>
</html>