<?php
/**
 * @file
 * Contains autoload.php
 */

/** @var \Composer\Autoload\Classloader $autoloader */
$autoloader = include __DIR__ . '/../vendor/autoload.php';
$autoloader->addPsr4('EclipseGc\ArrayPermutationGenerator\Test\\', __DIR__ . '/src');
return $autoloader;