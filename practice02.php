<?php
// String Practice Set

// 1. Vowel Counter

// Write a function that takes a string and returns the number of vowels (a, e, i, o, u) in it.

$str = "Hello I am urvashi patel";
$vowels = array("a", "e", "i", "o", "u");
$count = 0;
for ($i = 0; $i < strlen($str); $i++) {
  if (in_array(strtolower($str[$i]), $vowels)) {
    $count++;
  }
}
echo "Number of vowels in $str is: $count.<br>";

// ---

// 2. Palindrome Checker

// Write a program to check if a given string is a palindrome (reads the same forward and backward).

function Palindrome($MyString) {
  $revString = strrev($MyString);
  if ($revString == $MyString){
    echo $MyString." is a Palindrome string.<br>";
  } else {
    echo $MyString." is not a Palindrome string.<br>";
  }
}

Palindrome("radar");
Palindrome("rubber");
Palindrome("malayalam");
Palindrome("madam");



// ---

// 3. Word Frequency

// Given a string of text, count how many times each word appears. Ignore punctuation and case.

// Example:

 //text = "Hello hello world!"
// Output: {'hello': 2, 'world': 1}
echo substr_count(strtolower("Hello hello world!"),"hello")."<br>";

echo substr_count(strtolower("Hello hello world!"),"world")."<br>";




// ---

// 4. Capitalize Each Word

// Write a function that capitalizes the first letter of every word in a sentence.


 $str ="Hello hello world!";
 $new = ucwords($str);
 echo $new."<br>";


// 5. Anagram Checker

// Create a function that checks if two strings are anagrams (e.g., "listen" and "silent").
function is_anagram($string_1, $string_2)
	{
		if (count_chars($string_1, 1) == count_chars($string_2, 1))
			return 'yes';
		else
			return 'no';	
	}

	
	print_r(is_anagram('listen', 'silent')."<br>");
	


?>