<?php

use PHPUnit\Framework\TestCase;
use \App\RomanNumerals;

class RomanNumeralsTest extends TestCase {

  /**
   * @test
   * @dataProvider checks
   */
  public function it_generates_the_roman_numeral_for_numbers($number, $numeral)
  {
    $romanNumerals = new RomanNumerals();
    $this->assertEquals($numeral, $romanNumerals->generate($number));
  }

  public static function checks() {
    return [
        [1, "I"],
        [2, "II"],
        // Add more test cases here
      ];
  }
}
