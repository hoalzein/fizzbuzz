<?php

namespace App;

class Number
{
    private $fizz;
    private $buzz;
    private $fizz_buzz;
    public $value;

    function __construct()
    {
        $this->fizz = false;
        $this->buzz = false;
        $this->fizz_buzz = false;
    }

    public function analyse()
    {
        if ($this->value % 3 == 0) {
            $this->fizz = true;
        }
        if ($this->value % 5 == 0) {
            $this->buzz = true;
        }
        if ($this->fizz && $this->buzz) {
            $this->fizz_buzz = true;
        }
    }

    public function evaluate(): string
    {
        if ($this->fizz_buzz) {
            return "FizzBuzz";
        }
        if ($this->fizz) {
            return "Fizz";
        }
        if ($this->buzz) {
            return "Buzz";
        }
        return $this->value;
    }


}