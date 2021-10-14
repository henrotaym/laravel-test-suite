<?php
namespace Henrotaym\LaravelTestSuite;

use Mockery;
use Mockery\MockInterface;

trait TestSuite {

    /**
     * Mocking given element.
     * 
     * @param string $element Element to mock
     * @return MockInterface
     */

    protected function mockThis(string $element, bool $is_partial = false): MockInterface
    {
        $mock = Mockery::mock($element);
        if ($is_partial):
            $mock->makePartial();
        endif;
        
        $this->app->singleton($element, function($app) use ($mock) {
            return $mock;
        });

        return $mock;
    }
}