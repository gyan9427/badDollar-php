<?php

namespace App\Main;

class Dollar
{
    /**
     * Dollar attribute amount
     * 
     * @var Float $amount 
     */
    protected $amount; 

    /**
     * Dollar constructor
     * set initial dollar amount 
     * @param Float $dollar 
     */
    public function __construct(Float $dollar=0){
        $this->amount = $dollar;
    }

    /**
     * returns Dollar Amount
     */
    public function getAmount(){
        return $this->amount;
    }

    /**
     * Adds amount to the amount
     */
    public function addAmount(Dollar $dollar){
        return $this->amount += $dollar->getAmount();
    }
}