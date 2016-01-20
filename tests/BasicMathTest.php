<?php

/**
 * Created by PhpStorm.
 * User: Jeremy
 * Date: 1/20/2016
 * Time: 1:32 AM
 */
include('../app/BasicMath.php');

class BasicMathTest extends PHPUnit_Framework_TestCase
{
    public function setUp(){ }
    public function tearDown(){ }

    public function testAddition() {
        $math = new BasicMath();
        $this->assertTrue($math->addition(2,2) == 4);
    }
}