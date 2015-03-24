<?php
echo "<strong>String Challenges</strong>" . '</br>';

$variable = " This is a <strong>string</string> example.";

// Display the number of characters that were removed by using trim().

// Figure out how to capitalize the first letter of all words, including
//the word in the <strong> tag, but without removing the <strong> tag permanently.

// Display the following date using the date() function
// May 24th, 2010
$variable = date('F j, Y', time() - 24*60*60);
// Find out how to remove the period from the string var using trim().

echo $variable;

echo "<strong>PHP Arrays</strong>" . '</br>';

// Implements an array
$my_array = array('Item 1', 'Item 2', 'Item 3');

// Adds new items to an array
$my_array[] = 'Item 4';

// Referencing an item in the array
print $my_array[0] . '</br>';
print $my_array[1] . '</br>';

// Outputs any variable in a way that can be read fairly easily.
var_dump($my_array);

// Associative Arrays have a 'key' and a 'value'.
$my_associative_array = array('Bob' => 1972, 'Rocky' => 1960, 'Rambo' => 1985);

// Add items.
$my_associative_array['Lucy'] = 1984;

// Reference the Item.
// This prints 1972.
print $my_associative_array['Bob'] . '</br>';

// Multi-dimensional arrays
// Arrays inside of arrays
$my_multidimensional_array = array(
  'Bob' => array(
    'birthyear' => 1972,
    'fav_band' => 'The Cure',
    'shoe_size' => 10,
  ),
  'Rocky' => array(
    'birthyear' => 1960,
    'fav_band' => 'The Beach Boys',
    'shoe_size' => 6,
  ),
);

// Add a new item to a multi-dimensional array.
$my_multidimensional_array['Bugs'] = array(
    'birthyear' => 1950,
    'fav_band' => 'The Tweets',
    'shoe_size' => 25,
  );

// Reference the data
print $my_multidimensional_array['Bugs']['fav_band'] . '</br>';

// Nesting is limitless

//***** Manipulating Arrays *****//

// Sort value, ascending.
asort($my_multidimensional_array);

// Sort by key.
ksort($my_multidimensional_array);

// Pick a random item.
$random_item = array_rand($my_multidimensional_array);

// Take item off the end of the array.
array_pop($my_multidimensional_array);

// Return the number of items in the array.
$count = count($my_multidimensional_array);
print $count;

//<h2>Array like objects</h2>

// Object equivalent of an associative array.
$my_object = new stdClass;

$my_object->George = 1972;

// Accessing object properties.
print $my_object->George . '</br>';

// Object equivalent of all multi-dimensional array.
$my_object = new stdClass;

$my_object->George = new stdClass;
$my_object->George->birthyear = 1972;
$my_object->George->fav_band = 'The Cure';

$my_object->Bugs = new stdClass;
$my_object->Bugs->birthyear = 1950;
$my_object->Bugs->fav_band = 'The Tweets';

// Acess a property of a property.
print $my_object->Bugs->fav_band;

?>
