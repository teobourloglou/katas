<?php

use App\PrimeFactors;

class PrimeFactorsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @dataProvider factors
     */
    public function it_generates_prime_factors($number, $expected)
    {
        $factors = new PrimeFactors();

        $this->assertEquals($expected, $factors->generate($number));
    }

    public static function factors()
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [11, [11]],
            [12, [2, 2, 3]],
            [17, [17]],
            [100, [2, 2, 5, 5]]
        ];
    }

}