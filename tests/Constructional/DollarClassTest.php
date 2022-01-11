<?php
use PHPUnit\Framework\TestCase;
use App\Main\Dollar;


class DollarClassTest extends TestCase
{
    protected $class;

    protected function setUp(): void 
    {
        $this->class = new Dollar;
    } 

    function testPresenceOfDollarClassWithAttributeAmount(){
        $this->assertObjectHasAttribute('amount',$this->class);    
    }

    function testAmountAttributeMustReturnZero(){
        $this->assertEquals(0,$this->class->getAmount());
    }

    function testAddDollarMustAddAmountToTheAmount(){
        $initiate = new Dollar(9);
        $this->assertEquals(9,$this->class->addAmount($initiate));
    }
}