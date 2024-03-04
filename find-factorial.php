<?php
    /*
    |--------------------------------------------------------------------------
    | PHP CHALLENGE ACCEPTED - FIND FACTORIAL
    |--------------------------------------------------------------------------
    | Stand With Palestine | Free Palestine | Save Gaza
    |
    | Youtube: @raza_code_academy | Instagram: raza_code_academy
    |
    | Find Factorial With 4 Different Methods In PHP.
    */

    // 1. Using For Loop:
    // 2. Using Recursion:
    // 3. Using array_reducer():
    // 4. Using Foreach Loop:

    // 1. Solution:
        function factorialUsingForLoop($n) {
            $factorial = 1;
            for ($i = 1; $i <= $n; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        }
        
        // Example usage:
        $number = 5;
        $result = factorialUsingForLoop($number);
        echo "<b>1. Using For Loop:</b></br>";
        echo "Factorial of $number is $result</br></br>";

    // 2. Solution:
        function factorialUsingRecursion($n) {
            if ($n == 0 || $n == 1) {
                return 1;
            } else {
                return $n * factorialUsingRecursion($n - 1);
            }
        }
        
        // Example usage:
        $number = 5;
        $result = factorialUsingRecursion($number);
        echo "<b>2. Using Recursion:</b></br>";
        echo "Factorial of $number is $result</br></br>";

    // 3. Solution:
        function factorialUsingArrayReduce($n) {
            $numbers = range(1, $n); // [1, 2, 3, 4, 5]
            $factorial = array_reduce($numbers, function($carry, $item) {
                return $carry * $item;
            }, 1);
            return $factorial;
        }
        
        // Example usage:
        $number = 5;
        $result = factorialUsingArrayReduce($number);
        echo "<b>3. Using array_reducer():</b></br>";
        echo "Factorial of $number is $result</br></br>";

    // 4. Solution:
        function factorialUsingForeach($n) {
            $factorial = 1;
            $numbers = range(1, $n); // [1, 2, 3, 4, 5]
            foreach ($numbers as $number) {
                $factorial *= $number;
            }
            return $factorial;
        }
        
        // Example usage:
        $number = 5;
        $result = factorialUsingForeach($number);
        echo "<b>4. Using Foreach Loop:</b></br>";
        echo "Factorial of $number is $result</br></br>";
    
    
