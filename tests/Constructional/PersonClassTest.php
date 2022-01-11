<?php

use PHPUnit\Framework\TestCase;
use App\Clients\Person;

class PersonClassTest extends TestCase {
    function testPersonClassMustHaveWalletAttribute(){
        $this->assertClassHasAttribute('wallet', Person::class);
    }
}