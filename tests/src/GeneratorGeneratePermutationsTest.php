<?php

/**
 * @file
 * Contains \EclipseGc\ArrayPermutationGenerator\Test\TestGeneratorGeneratePermutations.
 */

namespace EclipseGc\ArrayPermutationGenerator\Test;

use EclipseGc\ArrayPermutationGenerator\Generator;

class GeneratorGeneratePermutationsTest extends \PHPUnit_Framework_TestCase {

  public function testGeneratePermutations() {
    $array1 = [
      'a',
      'b',
      'c'
    ];
    $results = [];
    Generator::generatePermutations('__', $results, $array1);
    $this->assertEquals(3, count($results));
    $this->assertEquals($array1, $results);
    $array2 = [
      'd',
      'e',
      'f',
      'g'
    ];
    $results = [];
    Generator::generatePermutations('__', $results, $array1, $array2);
    $this->assertEquals(12, count($results));
    $expected = [
      0 => 'a__d',
      1 => 'b__d',
      2 => 'c__d',
      3 => 'a__e',
      4 => 'b__e',
      5 => 'c__e',
      6 => 'a__f',
      7 => 'b__f',
      8 => 'c__f',
      9 => 'a__g',
      10 => 'b__g',
      11 => 'c__g',
    ];
    $this->assertEquals($expected, $results);
    $array3 = [
      'h',
      'i',
      'j',
      'k',
      'l'
    ];
    $results = [];
    Generator::generatePermutations('__', $results, $array1, $array2, $array3);
    $this->assertEquals(60, count($results));
    $expected = [
      0 => 'a__d__h',
      1 => 'b__d__h',
      2 => 'c__d__h',
      3 => 'a__e__h',
      4 => 'b__e__h',
      5 => 'c__e__h',
      6 => 'a__f__h',
      7 => 'b__f__h',
      8 => 'c__f__h',
      9 => 'a__g__h',
      10 => 'b__g__h',
      11 => 'c__g__h',
      12 => 'a__d__i',
      13 => 'b__d__i',
      14 => 'c__d__i',
      15 => 'a__e__i',
      16 => 'b__e__i',
      17 => 'c__e__i',
      18 => 'a__f__i',
      19 => 'b__f__i',
      20 => 'c__f__i',
      21 => 'a__g__i',
      22 => 'b__g__i',
      23 => 'c__g__i',
      24 => 'a__d__j',
      25 => 'b__d__j',
      26 => 'c__d__j',
      27 => 'a__e__j',
      28 => 'b__e__j',
      29 => 'c__e__j',
      30 => 'a__f__j',
      31 => 'b__f__j',
      32 => 'c__f__j',
      33 => 'a__g__j',
      34 => 'b__g__j',
      35 => 'c__g__j',
      36 => 'a__d__k',
      37 => 'b__d__k',
      38 => 'c__d__k',
      39 => 'a__e__k',
      40 => 'b__e__k',
      41 => 'c__e__k',
      42 => 'a__f__k',
      43 => 'b__f__k',
      44 => 'c__f__k',
      45 => 'a__g__k',
      46 => 'b__g__k',
      47 => 'c__g__k',
      48 => 'a__d__l',
      49 => 'b__d__l',
      50 => 'c__d__l',
      51 => 'a__e__l',
      52 => 'b__e__l',
      53 => 'c__e__l',
      54 => 'a__f__l',
      55 => 'b__f__l',
      56 => 'c__f__l',
      57 => 'a__g__l',
      58 => 'b__g__l',
      59 => 'c__g__l',
    ];
    $this->assertEquals($expected, $results);

    // Prove it works when called numerous times separately.
    $results = [];
    Generator::generatePermutations('__', $results, $array1);
    Generator::generatePermutations('__', $results, $array3);
    $this->assertEquals(15, count($results));
  }

}
