--TEST--
Test gmstrftime() function : usage variation - Passing month related format strings to format argument.
--FILE--
<?php
/* Prototype  : string gmstrftime(string format [, int timestamp])
 * Description: Format a GMT/UCT time/date according to locale settings
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing gmstrftime() : usage variation ***\n";

// Initialise function arguments not being substituted (if any)
$timestamp = gmmktime(8, 8, 8, 8, 8, 2008);

//array of values to iterate over
$inputs = array(
      'Abbreviated month name' => "%b",
      'Full month name' => "%B",
      'Month as decimal' => "%m",
);

// loop through each element of the array for timestamp

foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmstrftime($value) );
      var_dump( gmstrftime($value, $timestamp) );
};

?>
--EXPECTF--
*** Testing gmstrftime() : usage variation ***

--Abbreviated month name--
string(%d) "%s"
string(3) "Aug"

--Full month name--
string(%d) "%s"
string(6) "August"

--Month as decimal--
string(%d) "%d"
string(2) "08"
