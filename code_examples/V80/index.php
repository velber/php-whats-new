<?php

use App\V74\MyClass;

echo '<pre>';
echo '<h1>PHP 8.0</h1>';

/**
 * Named arguments.
 */
echo '<hr><h2>Named arguments</h2>';
$string = 'test';

// PHP 7
htmlspecialchars($string, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);

// PHP >= 8
htmlspecialchars($string, double_encode: false);

function send($message, $type = 'mail', $delay = 8)
{
    echo sprintf("%s | by %s in %d seconds", $message, $type, $delay);
}

send('Hello', delay:4);

/**
 * Attributes - Instead of PHPDoc annotations, you can now use structured metadata with PHP's native syntax.
 */
echo '<hr><h2>Attributes</h2>';
class PostsController
{
    /**
     * @Route("/api/posts/{id}", methods={"GET"}) - PHP7
     */

    #[Route("/api/posts/{id}", methods: ["GET"])]
    public function get($id) { /* ... */ }
}


/**
 * Constructor property promotion - Less boilerplate code to define and initialize properties.
 */
echo '<hr><h2>Constructor property promotion</h2>';

class Point {
    public function __construct(
        public float $x = 0.0,
        public float $y = 0.0,
        float $z = 0.0,
    ) {}
}
// z will not init, need to add public/private
$point = new Point();
var_dump($point);

/**
 * Union types - Instead of PHPDoc annotations for a combination of types, you can use native union type declarations
 * that are validated at runtime.
 */
echo '<hr><h2>Union types</h2>';
class Numbers {

//    private int|float $numb; - error already exists

    public function __construct(
        private int|float $numb
    ) {}
}

$number = new Numbers(55);
var_dump($number);


/**
 * Match expression
 * The new match is similar to switch and has the following features:
 *  - Match is an expression, meaning its result can be stored in a variable or returned.
 *  - Match branches only support single-line expressions and do not need a break; statement.
 *  - Match does strict comparisons.
 */
echo '<hr><h2>Match expression</h2>';

// PHP 7
switch (8.0) {
    case '8.0':
        $result = "Oh no!";
        break;
    case 8.0:
        $result = "This is what I expected";
        break;
}
echo $result; //> Oh no!

echo match (8.0) {
    '8.0' => "Oh no!",
    8.0 => "This is what I expected",
};
//> This is what I expected

$a = '14a';
$b = match ($a) {
    14 => 'aaaaaa',
    '14' => 'bbbbbbb',
    default => 2222,
};
var_dump($b);


/**
 * Nullsafe operator
 * Instead of null check conditions, you can now use a chain of calls with the new nullsafe operator.
 * When the evaluation of one element in the chain fails, the execution of the entire chain aborts and the entire chain
 * evaluates to null.
 */
echo '<hr><h2>Nullsafe operator</h2>';

// PHP 7
$country =  null;
$session = null;

if ($session !== null) {
    $user = $session->user;

    if ($user !== null) {
        $address = $user->getAddress();

        if ($address !== null) {
            $country = $address->country;
        }
    }
}

// PHP 8
$country = $session?->user?->getAddress()?->country;
var_dump($country);$country = $session?->user?->getAddress()?->country;
var_dump($user?->order?->price);

/**
 * Saner string to number comparisons
 * When comparing to a numeric string, PHP 8 uses a number comparison. Otherwise, it converts the number to a string
 * and uses a string comparison.
 * */
echo '<hr><h2>Saner string to number comparisons</h2>';


// PHP 8
var_dump(0 == 'foobar'); // false, but true in  PHP 7

/**
 * Consistent type errors for internal functions
 * Most of the internal functions now throw an Error exception if the validation of the parameters fails.
 * */
echo '<hr><h2>Consistent type errors for internal functions</h2>';


// PHP 7
strlen([]); // Warning: strlen() expects parameter 1 to be string, array given

array_chunk([], -1); // Warning: array_chunk(): Size parameter expected to be greater than 0

// PHP 8
strlen([]); // TypeError: strlen(): Argument #1 ($str) must be of type string, array given

array_chunk([], -1); // ValueError: array_chunk(): Argument #2 ($length) must be greater than 0
