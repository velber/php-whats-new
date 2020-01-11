<?php

use App\V74\MyClass;

/**
 * Allow exceptions from __toString() method
 */
$myClass = new MyClass();
try {
    echo $myClass;
} catch (Throwable $exception) {
    echo $exception->getMessage();
}

/**
 * Typed properties
 */
$myClass1 = new MyClass();
echo '<br>';
echo $myClass1->string;
echo $myClass1->number;

/**
 * Arrow functions notation
 */
echo '<br>';
$variable = 10;

// PHP <= 7.3
$myFunction = array_map(function($value) use ($variable) {
    return $value * $variable;
}, [1, 2, 3, 4]);

// PHP >= 7.4
$myFunction = array_map(fn($value) => $value * $variable, [1, 2, 3, 4]);
var_dump($myFunction);

/**
 * Improvements to Arrays
 *   - Null coalescing assignment operator
 *   - Unpacking inside arrays (...) or Spread syntax (JS). In other words three dots means explode array to variables.
 */
echo '<br>';
$array = [
    'name' => 'John',
    'title' => 'Teacher',
];

// PHP <= 7.3
//if (! isset($array['email'])) {
//    $array['email'] = 'old@email';
//}

// PHP >= 7.4
$array['email'] ??= 'new@test';
var_dump($array);

echo '<br>';
$fruits = ['apple', 'bananas'];

// old
$allFruits = array_merge(['oranges'], $fruits);

// new
// but do not work with string keys if keys repeat
// with number keys it will change keys
$allFruits = ['lemon', ...$fruits];
var_dump($allFruits);

function test(...$args) { var_dump($args); }
test(1, 2, 3);

/**
 * __serialize & __unserialize() methods
 */
echo '<br>';
$myClass2 = new MyClass();
$s = serialize($myClass2);
echo $s;
$un = unserialize($s);
var_dump($un);


