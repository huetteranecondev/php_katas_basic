<?php

namespace Katas\StringCalculator\Test;

use Katas\StringCalculator\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{    
	/**
	 * @test
	 */
	public function PHPUnitShouldWork()
	{
            $sut = new StringCalculator();
            $this->assertInstanceOf(StringCalculator::class, $sut);
	}
}

