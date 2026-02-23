<?php
namespace Henrotaym\LaravelTestSuite\Tests\Unit;

use Mockery\MockInterface;
use PHPUnit\Framework\Attributes\Test;
use Henrotaym\LaravelTestSuite\Tests\TestCase;

class MockThisTest extends TestCase
{
    #[Test]
    public function mock_this_registers_mock_as_singleton()
    {
        $mock = $this->mockThis(TargetClass::class);

        $this->assertInstanceOf(MockInterface::class, $mock);
        $this->assertSame($mock, app()->make(TargetClass::class));
    }

    #[Test]
    public function mock_this_returns_partial_mock_when_requested()
    {
        $mock = $this->mockThis(TargetClass::class, true);

        $this->assertInstanceOf(MockInterface::class, $mock);
        $this->assertSame($mock, app()->make(TargetClass::class));
        $this->assertEquals('real', $mock->realMethod());
    }

    #[Test]
    public function mock_this_without_partial_does_not_call_real_methods()
    {
        $mock = $this->mockThis(TargetClass::class);

        $mock->shouldReceive('realMethod')->andReturn('mocked');
        $this->assertEquals('mocked', $mock->realMethod());
    }
}

class TargetClass
{
    public function realMethod(): string
    {
        return 'real';
    }
}
