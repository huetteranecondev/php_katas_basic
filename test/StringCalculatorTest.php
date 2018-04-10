<?php

namespace Katas\LeapYear\Test;

use Katas\LeapYear\LeapYearChecker;
use PHPUnit\Framework\TestCase;

class LeapYearCheckerTest extends TestCase
{    
	/**
	 * @test
	 */
	public function PHPUnitShouldWork()
	{
            $sut = new LeapYearChecker();
            $this->assertInstanceOf(LeapYearChecker::class, $sut);
	}
        
         /**
         * @test
         */
        public function ShouldFindNonLeapYearIfNotDivisibleByFour()
        {
            $sut = new LeapYearChecker();
            
            $result = $sut->check(1997);
            
            $this->assertFalse($result);
        }
        
        /**
         * @test
         */
        public function ShouldFindLeapYearIfDivisibleByFour()
        {
            $sut = new LeapYearChecker();
            
            $result = $sut->check(2000);
            
            $this->assertTrue($result);
        }
        
        /**
         * @test
         */
        public function ShouldFindLeapYearIfDivisibleByFourAndNotHundred()
        {
            $sut = new LeapYearChecker();
            
            $result = $sut->check(2012);
            
            $this->assertTrue($result);
        }
        
        /**
         * @test
         */
        public function ShouldFindLeapYearIfDivisibleByHundredAndFourHundred()
        {
            $sut = new LeapYearChecker();
            
            $result = $sut->check(2400);
            
            $this->assertTrue($result);
        }
        
        /**
         * @test
         */
        public function ShouldFindNonLeapYearIfDivisibleByFourAndHundredButNotFourHundred()
        {
            $sut = new LeapYearChecker();
            
            $result = $sut->check(2200);
            
            $this->assertFalse($result);
        }
        
         /**
          * @test
          * @dataProvider leapYears
         */
        public function ShouldFindLeapYear(int $year)
        {
            $sut = new LeapYearChecker();
            
            $result = $sut->check($year);
            
            $this->assertTrue($result);
        }
        
        public function leapYears()
        {
            return [
                [1804], [1808], [1812], [1816], 
                [1820], [1824], [1828], [1832], 
                [1836], [1840], [1844], [1848], 
                [1852], [1856], [1860], [1864], 
                [1868], [1872], [1876], [1880], 
                [1884], [1888], [1892], [1896], 
                [1904], [1908], [1912], [1916], 
                [1920], [1924], [1928], [1932], 
                [1936], [1940], [1944], [1948], 
                [1952], [1956], [1960], [1964], 
                [1968], [1972], [1976], [1980], 
                [1984], [1988], [1992], [1996], 
                [2000], [2004], [2008], [2012], 
                [2016]
            ];
        }
        
         /**
          * @test
          * @dataProvider nonLeapYears
         */
        public function ShouldFindNonLeapYear(int $year)
        {
            $sut = new LeapYearChecker();
            
            $result = $sut->check($year);
            
            $this->assertFalse($result);
        }       
       
        public function nonLeapYears()
        {
            return [
                [1805], [1806], [1813], [1817], 
                [1830], [1870], [1894], [1898], 
                [1914], [1950], [1986], [1990], 
                [1997], [2002], [2010], [2017],
                [2018]
            ];
        }
}

