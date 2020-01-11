<?php


namespace App\V74;


class MyClass
{
    public string $customVariable = 'myClass';

    public string $string = 'hello';

    public int $number = 4;

    // protected int $number1 = '1'; // fail

    public function __construct()
    {
        // will throw TypeError
        // $this->string = ['hello'];
        // and this PHP Warning
        // $this->string = substr($this->string, 0, 1);

        $this->number = '1'; // works
        // $this->number = '1fsfsfs'; // notice
        // $this->number = 'fsfsfs'; // fail
    }

    public function __toString()
    {
        if (true) {
            throw new \Exception("allow exception from __toString()");
        }

        return 'my class';
    }

    public function __serialize(): array
    {
        return [
            'custom' => $this->customVariable . 'ssssssssssss',
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->customVariable = $data['custom'];
    }
}
