<?php
require __DIR__ . "/../app/Number.php";

use App\Number;
use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    public $number;

    function __construct()
    {
        parent::__construct();
        $this->number = new Number;
    }

    public function test10AsBuzz()
    {
        $this->number->value = 10;
        $this->number->analyse();
        $this->assertEquals("Buzz", $this->number->evaluate());
    }

    public function test36AsFizz()
    {
        $this->number->value = 36;
        $this->number->analyse();
        $this->assertEquals("Fizz", $this->number->evaluate());
    }

    public function test15AsFizzBuzz()
    {
        $this->number->value = 15;
        $this->number->analyse();
        $this->assertEquals("FizzBuzz", $this->number->evaluate());
    }

    public function test59AsNonFizzBuzz()
    {
        $this->number->value = 59;
        $this->number->analyse();
        $this->assertEquals($this->number->value, $this->number->evaluate());
    }
}
