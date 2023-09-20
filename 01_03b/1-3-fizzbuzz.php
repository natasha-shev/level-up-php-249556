<?php
function fizzBuzz() {
  for ($i = 1; $i < 101; $i++) {
    $item = '';

    if ($i % 3 === 0) {
      $item .= 'Fizz';
    }

    if ($i % 5 === 0) {
      $item.= 'Buzz';
    }

    echo strlen($item) ? $item : $i;
    echo '<br/>'; 
  }
}

fizzBuzz();

?>