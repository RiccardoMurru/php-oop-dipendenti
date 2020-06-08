<?php
include_once __DIR__ . '/../classes/Employee.php';
include_once __DIR__ . '/../classes/Executive.php';
include_once __DIR__ . '/../classes/OfficeWorker.php';

// creazione oggetti
$executives = [
    [
        'Riccardo', 'Murru', 'y', 'CFO'
    ],
    [
        'Bill', 'Gates', 'y', 'CEO',
    ],
    [
        'Steve', 'Jobs', 'n', 'president'
    ]
];

$office_workers = [
    [
        'Mark', 'Zuckerberg', 'n', 'coffee boy'
    ],
    [
        'Satya', 'Nadella', 'y', 'secretary'
    ],
    [
        'Larry', 'Page', 'y', 'handyman'
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
