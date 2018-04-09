<?php

namespace Afh\Example\Test;

use Afh\Example\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{    
	/**
	 * @test
	 */
	public function PHPUnitShouldWork()
	{
		$sut = new Example();
		$this->assertInstanceOf(Example::class, $sut);
	}
}

