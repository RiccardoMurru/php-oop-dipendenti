<?php
// include parent class
include_once __DIR__ . '/Employee.php';

/**
 * Executive class (child)
 */

class Executive extends Employee
{
    // properties
    public $role;
    public $mail;
    public $is_working;

    // constructor 
    public function __construct($_name, $_lastName, $_working, $_role)
    {
        parent::__construct($_name, $_lastName, $_working);
        $this->role = $_role;
    }

    // methods 

    // set id
    public function setId($last_name)
    {
        $code = strtoupper(substr(str_shuffle($last_name), 0, 3));
        $num = rand(1000, 9999);
        $this->id = $code . $num . 'EXE';
    }
}
