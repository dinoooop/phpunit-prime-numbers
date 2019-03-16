<?php

use PHPUnit\Framework\TestCase;


class PrimeTest extends TestCase
{

    public function testIsPrime()
    {
        $primeNumber = new PrimeNumber;
        $this->assertEquals(true, $primeNumber->isPrime(2));
    }

    public function testNotPrime()
    {
        $primeNumber = new PrimeNumber;
        $this->assertEquals(false, $primeNumber->isPrime(4));
    }

    public function testGetNPrimeNumbers()
    {
        $primeNumber = new PrimeNumber;
        $this->assertEquals([2, 3, 5, 7, 11, 13, 17, 19, 23, 29], $primeNumber->getNPrimeNumbers(10));
    }

    public function testPrimePageOne()
    {
        $primeNumber = new PrimeNumber;
        $this->assertEquals([2, 3, 5, 7, 11], $primeNumber->getPrimeNumbersPage(1));
    }

    public function testPrimePageTwo()
    {
        $primeNumber = new PrimeNumber;
        $this->assertEquals([13, 17, 19, 23, 29], $primeNumber->getPrimeNumbersPage(2));
    }

    public function testPrimePageThree()
    {
        $primeNumber = new PrimeNumber;
        $this->assertEquals([31, 37, 41, 43, 47], $primeNumber->getPrimeNumbersPage(3));
    }

}
