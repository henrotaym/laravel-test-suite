<?php
namespace Henrotaym\LaravelTestSuite\Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Henrotaym\LaravelTestSuite\Tests\TestCase;

class InstallationProcessTest extends TestCase
{
    #[Test]
    public function mocking_now_workin_as_expected()
    {
        $faked_now = now()->addDays(10);
        $this->assertInstanceOf(self::class, $this->mockCarbonNow($faked_now));
        $this->assertEquals($faked_now, now());
    }
}
