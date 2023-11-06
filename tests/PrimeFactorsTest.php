<?php

use PHPUnit\Framework\TestCase;
use \App\PrimeFactors;

class PrimeFactorsTest extends TestCase {

  /**
   * @test
   * @dataProvider factors
   * */
  function it_generates_prime_factors_for_numbers($number, $expected)
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
      [4, [2,2]],
      [5, [5]],
      [6, [2,3]],
      [7, [7]],
      [8, [2,2,2]],
      [100, [2,2,5,5]]
    ];
  }
}