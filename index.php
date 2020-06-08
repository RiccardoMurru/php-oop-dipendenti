<?php
// include classes
include_once __DIR__ . '/classes/Executive.php';
include_once __DIR__ . '/classes/OfficeWorker.php';
include_once __DIR__ . '/partials/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <main class="ml-5">
        <h2 class="display-4 my-5">Executives</h2>
        <div class="executives">
            <?php foreach ($exec_staff as $exec_person) : ?>
                <h3 class="text-info ml-4 my-3"><?php echo $exec_person->name . ' ' . $exec_person->last_name; ?></h3>
                <ul class="list-group w-50">
                    <li class="list-group-item"><?php echo $exec_person->role; ?></li>
                    <li class="list-group-item">
                        <?php try { ?>
                            <span class="text-success"><?php echo $exec_person->isWorking(); ?></span>
                        <?php } catch (Exception $e) { ?>
                            <span class="text-danger"> <?php echo 'Oh no! ' . $e->getMessage(); ?> </span>
                        <?php } ?>
                    </li>
                </ul>
            <?php endforeach ?>
        </div>

        <h2 class="display-4 my-5">Office Workers</h2>
        <div class="office-workers">
            <?php foreach ($office_staff as $office_person) : ?>
                <h3 class="text-info ml-4 my-3"><?php echo $office_person->name . ' ' . $office_person->last_name; ?></h3>
                <ul class="list-group w-50">
                    <li class="list-group-item"><?php echo $office_person->role; ?></li>
                    <li class="list-group-item">
                        <?php try { ?>
                            <span class="text-success"><?php echo $office_person->isWorking(); ?></span>
                        <?php } catch (Exception $e) { ?>
                            <span class="text-danger"> <?php echo 'Oh no! ' . $e->getMessage(); ?> </span>
                        <?php } ?>
                    </li>
                </ul>
            <?php endforeach ?>
        </div>
    </main>
</body>

</html>