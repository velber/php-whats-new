# whats-new-in-php
In this project describes new features and updates of php with examples, grouped by php versions.

### [PHP 7.4](code_examples/V74/index.php)
1. Allow exceptions from __toString() method.
2. Typed properties
3. Arrow functions notation fn `$b = array_map(fn($n) => $n * $n * $n, $a);`
4. Improvements to Arrays
  - null ??= `$this->request->data['comments']['user_id'] ??= ‘value’;`
  - ... `function test(...$args) { var_dump($args); }
test(1, 2, 3);`
5. serialize objects

- - -
6. Covariant Returns and Contravariant Parameters
7. Weak References
8. Preloading