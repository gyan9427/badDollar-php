<?php

namespace App\Clients;
use App\Main\Dollar;

class Work
{
    /**
     * Salary attribute
     * 
     * @var Dollar must have dollar class passed
     */
    protected $salary;

    /**
     * Constructor sets salary as object
     * 
     */
    public function __construct(){
        $this->salary = new Dollar(200); 
    }
    
    /**
     * Returns $salary;
     */
    public function payday(){
        return $this->salary;
    }

}