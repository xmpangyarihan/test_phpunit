<?php
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase{

    public function testNetPriceIsCalculatedCorrectly(){
        // Setup
        require "src/Cart.php";
        $cart = new Cart();
        $cart->price = 10;

        // Do something
        $netPrice = $cart->getNetPrice();

        // Make assertions
        $this->assertEquals(12, $netPrice);
    }

}