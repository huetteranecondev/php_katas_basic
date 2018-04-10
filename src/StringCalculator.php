<?php

namespace Katas\LeapYear;

class LeapYearChecker
{

    public function __construct()
    {}
    
    public function check(int $year): bool
    {
        if (!$this->isDivisibleByFour($year))
        {
            return false;
        }

        if (!$this->isDivisibleByHundred($year))
        {
            return true;
        }
        
        if (!$this->isDivisibleByFourHundred($year))
        {
            return false;
        }
        
        return true;
        
    }
    
    private function isDivisibleByFour(int $year): bool
    {
        return ($year % 4 == 0);
    }
    
    private function isDivisibleByHundred(int $year): bool
    {
        return ($year % 100 == 0);
    }
    
    private function isDivisibleByFourHundred(int $year): bool
    {
        return ($year % 400 == 0);
    }
}

