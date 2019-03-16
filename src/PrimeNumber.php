<?php

class PrimeNumber
{

    private $display_count = 5;

    public function isPrime($number)
    {
        if ($number <= 1) {
            return false;
        }

        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }

    public function getNPrimeNumbers($count)
    {
        $results = [];

        $i = 1;
        while (count($results) < $count) {
            if ($this->isPrime($i)) {
                $results[] = $i;
            }
            $i++;
        }

        return $results;
    }

    public function getPrimeNumbersPage($page)
    {
        $count = $page * $this->display_count;
        $primeNumbers = $this->getNPrimeNumbers($count);
        return array_slice($primeNumbers, -$this->display_count);
    }

}
