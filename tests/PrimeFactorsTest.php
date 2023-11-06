<?php

use PHPUnit\Framework\TestCase;
use \App\PrimeFactors;

class PrimeFactorsTest extends TestCase {

  /** @test */
  function it_generates_prime_factors_for_1()
  {

    $factors = new PrimeFactors();

    $this->assertEquals([], $factors->generate(1));
  }

  /** @test */
  function it_generates_prime_factors_for_2()
  {

    $factors = new PrimeFactors();

    $this->assertEquals([2], $factors->generate(2));
  }
}