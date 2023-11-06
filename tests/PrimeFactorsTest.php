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
      [1, []]
    ];
  }
}