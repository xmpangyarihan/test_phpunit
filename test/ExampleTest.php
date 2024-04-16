<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase{
    
    public function testThatTwoStringsAreTheSame(){
        $string1 = "asd";
        $string2 = "asd";

        //assertSame($string1, $string2)
        $this->assertFalse($string1 == $string2);
    }

    public function testProductFunction(){
        require 'example-functions.php';

        $product = product(10, 2);

        $this->assertEquals(20, $product);
        $this->assertNotEquals(10, $product);
    }
}