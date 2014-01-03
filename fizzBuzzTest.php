<?php
/**
 * Created by PhpStorm.
 * User: t
 * Date: 03/01/14
 * Time: 14:42
 */
require_once 'fizzbuzz.php';
require_once 'PHPUnit/Framework/TestCase.php';

class fizzBuzzTest extends PHPUnit_Framework_TestCase {

    public function testGenerateNumbers(){
        $fb = new fizzbuzz();
        $numbers = $fb->generateNumbers();
        $x = count($numbers);
        $this->assertEquals($x, 100);

    }

    public function testIsDivisibleByFive($number) {

    }

    public function testIsDivisibleByThree($number) {

    }

    public function testNotDivisibleByFive($number) {

    }

    public function testNotDivisibleByThree($number) {

    }
}
 