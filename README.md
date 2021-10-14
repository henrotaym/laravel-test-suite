# Laravel test suite

## Installation

    composer require henrotaym/laravel-test-suite

## Configuration

Your TestCase should use this trait :

    Henrotaym\LaravelTestSuite\TestSuite

## Functionalities
### Mocking

    /**
	* Mocking given element.
	* 
	* @param  string $element Element to mock
	* @return  MockInterface
	*/
	protected  function  mockThis(string  $element,  bool  $is_partial  = false):  MockInterface
