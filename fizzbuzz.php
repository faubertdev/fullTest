<?php

// if elseif solution
function fizzbuzz($nbMax)
{
    for ($i = 0; $i <= $nbMax; $i++)
    {
        if ($i % 3 == 0){
            echo "Fizz";
        }elseif($i % 5 == 0){
            echo "Buzz";
        }elseif($i % 3 == 0 && $i % 5 ==0){ // or $i % 15 == 0
            echo "FizzBuzz";
        }else{
            echo $i;
        }
    }
}

// if ternaire solution
function fizzBuzz2($number)
{
    $fizz = $number % 3 == 0;
    $buzz = $number % 5 == 0;
    $fizzBuzz = ($fizz ? 'fizz' : '') . ($buzz ? 'buzz' : '');

    return !empty($fizzBuzz) ? $fizzBuzz : $number;
}

for ($n = 0; $n <= 100; $n++)
{
    echo fizzBuzz2($n);
}

fizzbuzz(100);
?>