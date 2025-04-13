<?php
$sentence = " The quick brown fox jumps over the lazy dog.";

//Remove the leading and trailing spaces.
$new = trim($sentence);
echo $new."<br>";

//convert sentence to lowercase
 $lower = strtolower($sentence);
echo $lower."<br>";


//count occurrences of the

$count = substr_count(strtolower($sentence),"the");
echo "the word 'the' appears $count times.<br>";

//replace fox with cat 

$sentence = str_replace("fox","cat",$sentence);
echo $sentence."<br>";

//extract first 10 characters 
$extract = substr($sentence,0,10);
echo $extract."<br>";

//reverse entire string
$reverse = strrev($sentence);
echo $reverse."<br>";


?>