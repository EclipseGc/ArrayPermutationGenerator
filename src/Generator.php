<?php

/**
 * @file
 * Contains \EclipseGc\ArrayPermutationGenerator\Generator.
 */

namespace EclipseGc\ArrayPermutationGenerator;

class Generator {

  public static function generatePermutations(string $separator, array &$results, array ...$arrays) {
    $empty = empty($results);
    $array = array_shift($arrays);
    $new_results = [];
    foreach ($array as $key => $value) {
      if ($empty) {
        $results[] = $value;
      }
      else {
        foreach ($results as $result) {
          $new_results[$key][] = $result . $separator . $value;
        }
      }
    }
    if ($new_results) {
      $results = array_merge(...$new_results);
    }
    if (count($arrays)) {
      Generator::generatePermutations($separator, $results, ...$arrays);
    }
  }

}
