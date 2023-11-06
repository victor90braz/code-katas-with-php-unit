<?php

use PHPUnit\Framework\TestCase;
use \App\PrimeFactors;

class PrimeFactorsTest extends TestCase {

  /**
   * @test
   * @dataProvider factors
   * */
  function it_generates_prime_factors_for_1($number, $expected)
  {

    $factors = new PrimeFactors();

    $this->assertEquals($expected, $factors->generate($number));
  }

  /** @test */
  function it_generates_prime_factors_for_2()
  {

    $factors = new PrimeFactors();

    $this->assertEquals([2], $factors->generate(2));
  }

  /** @test */
  function it_generates_prime_factors_for_3()
  {

    $factors = new PrimeFactors();

    $this->assertEquals([3], $factors->generate(3));
  }

  /** @test */
  function it_generates_prime_factors_for_4()
  {

    $factors = new PrimeFactors();

    $this->assertEquals([2,2], $factors->generate(4));
  }

  public static function factors()
  {
    return [
      [1, []]
    ];
  }
}