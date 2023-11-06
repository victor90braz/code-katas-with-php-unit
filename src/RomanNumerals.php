<?php

namespace App;

class RomanNumerals {

  public static function generate($number)
  {
    $result = '';

    while ($number > 0) {
      $result .= 'I'; // Use the '.' operator for string concatenation

      $number -= 1;
    }

    return $result;
  }
}
