<?php
namespace Henrotaym\LaravelTestSuite\Tests\Unit;

use Henrotaym\LaravelTestSuite\Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function returning_true()
    {
        $this->assertTrue(method_exists($this, 'mock'));
    }
}