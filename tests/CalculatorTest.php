<?php

namespace MemoChou1993\Calculator\Tests;

use MemoChou1993\Calculator\Facades\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * @return void
     */
    public function testAdd(): void
    {
        $this->assertEquals(3, Calculator::add(1, 2));
    }
}
