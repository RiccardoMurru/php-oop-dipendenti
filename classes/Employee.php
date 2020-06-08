<?php

/**
 * Employee class (parent)
 */

class Employee
{
    // properties
    protected $id;
    public $name;
    public $last_name;
    public $is_working;

    // constructor
    public function __construct($_name, $_lastName, $_working)
    {
        $this->name = $_name;
        $this->last_name = $_lastName;
        $this->is_working = $_working;
    }

    // methods
    // set id da cognome + numero random + Prima lettera ruolo
    public function setId($last_name)
    {
        $code = substr(str_shuffle($last_name), 0, 3);
        $num = rand(1000, 9999);
        $this->id = $code . $num;
    }

    // is working
    public function isWorking()
    {
        if ($this->is_working !== 'y') {
            throw new Exception("il dipendente $this->id è stato licenziato");
        }

        echo "il dipendente $this->id lavora qui";
    }
}
