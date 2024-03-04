<?php
    /*
    |--------------------------------------------------------------------------
    | PHP CHALLENGE ACCEPTED - REVERSE STRING
    |--------------------------------------------------------------------------
    | Stand With Palestine | Free Palestine | Save Gaza
    |
    | Youtube: @raza_code_academy | Instagram: raza_code_academy
    |
    | Find Reverse String With 5 Different Methods In PHP.
    */
  
    // 1. Using strrev() Function:
    // 2. Using Loop and String Manipulation:
    // 3. Using implode() and str_split():
    // 4. Using array_reverse() and join():
    // 5. Using Recursion:

    // 1. Solution:
        $str = "Hello";
        $reversedString = strrev($str);

        echo "<b>1. Using strrev() Function:</b></br>";
        echo "Original string is  : $str </br>";
        echo "Reversed string is  : $reversedString</br></br>";

    // 2. Solution:
        function reverseString($str){
            $result = "";
            for($i = strlen($str) -1; $i >= 0; $i--){
                $result .= $str[$i];
            }
            return $result;
        }

        $reversedString = reverseString($str);

        echo "<b>2. Using Loop and string manipulation:</b></br>";
        echo "Original string is  : $str </br>";
        echo "Reversed string is  : $reversedString</br></br>";

    // 3. Solution:
        $str = "Hello";
        $str_split = str_split($str);
        $array_reverse = array_reverse($str_split);
        $reversedString = implode("", $array_reverse);

        echo "<b>3. Using implode() and str_split():</b></br>";
        echo "Original string is  : $str </br>";
        echo "Reversed string is  : $reversedString</br></br>";

     // 4. Solution:
        $str = "Hello";
        $str_split = str_split($str);
        $array_reverse = array_reverse($str_split);
        $reversedString = join("", $array_reverse);

        echo "<b>4. Using array_reverse() and join():</b></br>";
        echo "Original string is  : $str </br>";
        echo "Reversed string is  : $reversedString</br></br>";

    // 5. Solution:
        function reverseStringRecursive($str){
            if(strlen($str) <= 1){
                return $str;
            }

            return reverseStringRecursive(substr($str, 1)) . $str[0];
        }

        $str = "Hello";
        $reversedString = reverseStringRecursive($str);

        echo "<b>5. Using Recursion:</b></br>";
        echo "Original string is  : $str </br>";
        echo "Reversed string is  : $reversedString</br></br>";
