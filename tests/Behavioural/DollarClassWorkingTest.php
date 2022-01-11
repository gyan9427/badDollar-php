<?php

use PHPUnit\Framework\TestCase;
use App\Clients\Work;
use App\Clients\Person;

class DollarClassWorkingTest extends TestCase
{
    public function testDollarClassWorking(){
        $job = new Work;
        $p1 = new Person;
        $p2 = new Person;

        $p1->wallet = $job->payDay();
        $this->assertEquals(200,$p1->wallet->getAmount());

        $p2->wallet = $job->payDay();
        $this->assertEquals(200,$p2->wallet->getAmount());

        $p1->wallet->addAmount($job->payDay());
        $this->assertEquals(400,$p1->wallet->getAmount());

        $this->assertEquals(200,$p2->wallet->getAmount());
    }
}