<?php

namespace Tests\Calculator;

use App\Services\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_add_function()
    {
        $calculator = new Calculator();
        $this->assertEquals(7, $calculator->add(5, 2));
    }
}
