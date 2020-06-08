<?php
// include classes
include_once __DIR__ . '/classes/Executive.php';
include_once __DIR__ . '/classes/OfficeWorker.php';

// creazione oggetti
$executives = [
    [
        'riccardo', 'murru', 'y', 'CFO'
    ],
    [
        'bill', 'gates', 'y', 'CEO',
    ],
    [
        'steve', 'jobs', 'n', 'president'
    ]
];

$office_workers = [
    [
        'mark', 'zuckerberg', 'n', 'coffee boy'
    ],
    [
        'satya', 'nadella', 'y', 'secretary'
    ],
    [
        'larry', 'page', 'y', 'handyman'
    ]
];

$exec_staff = [];
$office_staff = [];

foreach ($executives as $executive) {
    $exec_staff[] = new Executive(...$executive);
    foreach ($exec_staff as $exec) {
        $exec->setId($exec->last_name);
    }
}

foreach ($office_workers as $office_worker) {
    $office_staff[] = new OfficeWorker(...$office_worker);
    foreach ($office_staff as $worker) {
        $worker->setId($worker->last_name);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>

<body>
    <h2>Executives</h2>
    <div class="executives">
        <?php foreach ($exec_staff as $exec_person) : ?>
            <h3><?php echo $exec_person->name . ' ' . $exec_person->last_name; ?></h3>
            <ul>
                <li><?php echo $exec_person->role; ?></li>
                <li>
                    <?php try {
                        $exec_person->isWorking();
                    } catch (Exception $e) {
                        echo 'Oh no! ' . $e->getMessage();
                    }
                    ?>
                </li>
            </ul>
        <?php endforeach ?>
    </div>

    <h2>Office Workers</h2>
    <div class="office-workers">
        <?php foreach ($office_staff as $office_person) : ?>
            <h3><?php echo $office_person->name . ' ' . $office_person->last_name; ?></h3>
            <ul>
                <li><?php echo $office_person->role; ?></li>
                <li>
                    <?php try {
                        $office_person->isWorking();
                    } catch (Exception $e) {
                        echo 'Oh no! ' . $e->getMessage();
                    }
                    ?>
                </li>
            </ul>
        <?php endforeach ?>
    </div>

</body>

</html>