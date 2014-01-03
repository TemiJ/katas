<?php
/**
 * Created by PhpStorm.
 * User: t
 * Date: 03/01/14
 * Time: 15:13
 */

class fizzbuzz {

    public function generateNumbers(){
        // The test should fail because I am adding a hundred
        //numbers but I am starting at zero where
        //I should be starting at one
        $numbers = array();
        $x = 0;
        while ($x <= 100) {
            $numbers[$x] = $x;
            $x++;
        }
        return $numbers;
    }
}