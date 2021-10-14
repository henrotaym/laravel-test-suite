<?php
namespace Henrotaym\LaravelTestSuite;

use Mockery;
use Mockery\MockInterface;

trait TestSuite {

    /**
     * Mocking given class.
     * 
     * @return MockInterface
     */

    protected function mock(string $class, bool $is_partial = false): MockInterface
    {
        $mock = Mockery::mock($class);
        if ($is_partial):
            $mock->makePartial();
        endif;
        
        $this->app->singleton($class, function($app) use ($mock) {
            return $mock;
        });

        return $mock;
    }
}