# whats-new-in-php
In this project describes new features and updates of php with examples, grouped by php versions.
### Run examples
` php -S localhost:8000` - launch php server.
Open http://localhost:8000/?version=70 in browser to open needed PHP 7.0 version example.

### [PHP 7.4](code_examples/V74/index.php)
https://www.php.net/manual/en/migration74.new-features.php
1. Arrow functions notation fn `$b = array_map(fn($n) => $n * $n * $n, $a);`
2. Typed properties
3. Improvements to Arrays
  - null ??= `$this->request->data['comments']['user_id'] ??= ‘value’;`
  - ... `function test(...$args) { var_dump($args); }
test(1, 2, 3);`
- - -
4. Allow exceptions from __toString() method.
5. serialize objects
6. Covariant Returns and Contravariant Parameters
7. Weak References
8. Preloading

### [PHP 7.0](code_examples/V70/index.php)
https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.scalar-type-declarations
1. Scalar type declarations 
2. Return type declarations
3. Null coalescing operator
4. Spaceship operator
5. Group use declarations
---
6. Anonymous classes
7. Integer division with intdiv()
8. Constant arrays using define()
9. IntlChar

### [PHP 5.6](code_examples/V56/index.php)
https://www.php.net/manual/en/migration56.new-features.php#migration56.new-features.splat
1. Variadic functions via ... 
2. Argument unpacking via ...





