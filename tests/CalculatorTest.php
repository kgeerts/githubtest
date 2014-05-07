<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-05-07 at 13:32:36.
 */
require_once '../Calculator.php';
class CalculatorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Calculator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Calculator;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * Generated from @assert (1,1) == 2.
     *
     * @covers Calculator::Calc
     */
    public function testCalc() {
        $this->assertEquals(
                2, $this->object->Calc(1, 1)
        );
    }

    /**
     * Generated from @assert (0,1) == 1.
     *
     * @covers Calculator::Calc
     */
    public function testCalc2() {
        $this->assertEquals(
                1, $this->object->Calc(0, 1)
        );
    }

    /**
     * Generated from @assert (1,0) == 0.
     *
     * @covers Calculator::Calc
     */
    public function testCalc3() {
        $this->assertEquals(
                0, $this->object->Calc(1, 0)
        );
    }

    /**
     * Generated from @assert (1,1) == 2.
     *
     * @covers Calculator::Calc
     */
    public function testCalc4() {
        $this->assertEquals(
                2, $this->object->Calc(1, 1)
        );
    }

    /**
     * Generated from @assert (1,2) == 3.
     *
     * @covers Calculator::Calc
     */
    public function testCalc5() {
        $this->assertEquals(
                3, $this->object->Calc(1, 2)
        );
    }

    /**
     * Generated from @assert (1,1) == 0.
     *
     * @covers Calculator::Substract
     */
    public function testSubstract() {
        $this->assertEquals(
                0, $this->object->Substract(1, 1)
        );
    }

    /**
     * Generated from @assert (0,1) == -1.
     *
     * @covers Calculator::Substract
     */
    public function testSubstract2() {
        $this->assertEquals(
                -1, $this->object->Substract(0, 1)
        );
    }

    /**
     * Generated from @assert (1,0) == 1.
     *
     * @covers Calculator::Substract
     */
    public function testSubstract3() {
        $this->assertEquals(
                1, $this->object->Substract(1, 0)
        );
    }

    /**
     * Generated from @assert (1,1) == 0.
     *
     * @covers Calculator::Substract
     */
    public function testSubstract4() {
        $this->assertEquals(
                0, $this->object->Substract(1, 1)
        );
    }

    /**
     * Generated from @assert (1,2) == -1.
     *
     * @covers Calculator::Substract
     */
    public function testSubstract5() {
        $this->assertEquals(
                -1, $this->object->Substract(1, 2)
        );
    }

}