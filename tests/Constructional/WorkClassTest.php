<?php

use PHPUnit\Framework\TestCase;
use App\Clients\Work;
use App\Main\Dollar;

class WorkClassTest extends TestCase
{
    function testPresenceOfWorkClassWithSalaryAttribute(){
        $class = new Work;
        $this->assertObjectHasAttribute('salary',$class);
    }

    function testMustGenerateDollarObjectAtWorkObjectCreation(){
        $work = new Work;
        $dollar = new Dollar(200);

        $this->assertEquals($dollar,$work->payDay());
    }
}