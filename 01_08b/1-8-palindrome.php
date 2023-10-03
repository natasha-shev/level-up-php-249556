<?php 

function is_palindrome( $str ): bool {
	$str = strtolower($str);
	$str = preg_replace('/[^a-z]/', '', $str);

	return $str === strrev($str);
}

$strings = array( 'Race Car', 'Amore, Roma', 'Hello World!', 'Madam, in Eden, I\'m Adam.', 'Joe wore more than in store' );

foreach( $strings as $string ) {
	$is = is_palindrome($string) ? ' is ' : ' is not ';
	echo $string . $is . 'a palindrome.<br/>'; 
}