<?php

require_once('Calculator.php');

/**
 * Class CalculatorTest
 */
class CalculatorTest extends PHPUnit\Framework\TestCase
{
    /**
     * @var $calculator
     */
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    /**
     * @throws Exception
     */
    public function testAdd()
    {
        $result = $this->calculator->calculation(1, '+', 2);
        $this->assertEquals(3, $result);
    }

    /**
     * @throws Exception
     */
    public function testSubtraction()
    {
        $result = $this->calculator->calculation(2, '-', 1);
        $this->assertEquals(1, $result);
    }

    /**
     * @throws Exception
     */
    public function testMultiplication()
    {
        $result = $this->calculator->calculation(2, '*', 2);
        $this->assertEquals(4, $result);
    }

    /**
     * @throws Exception
     */
    public function testDivision()
    {
        $result = $this->calculator->calculation(2, '/', 2);
        $this->assertEquals(1, $result);
    }
}
