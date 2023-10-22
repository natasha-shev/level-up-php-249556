<?php
namespace calculator;

use function calculator\multiply as CalculatorMultiply;

function add($numbers)
{
  return array_sum($numbers);
}

function subtract($start, $numbers)
{
  return $start - array_sum($numbers);
}

function multiply($numbers)
{
  return array_product($numbers);
}

function divide($start, $numbers)
{
  return $start / array_product($numbers);
}

function remainder($start, $numbers)
{
  foreach ($numbers as $number) {
    $start = $start % $number;
  }

  return $start;
}

function average($numbers)
{
  return array_sum($numbers)/count($numbers);
}
