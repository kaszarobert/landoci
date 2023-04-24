<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $a = 0;
        $b = 1;
        $expected = 1;
        $actual = $a + $b;
        $this->assertEquals($actual, $expected);
    }
}
