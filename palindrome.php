<?php

function palindrome($str) {
    $check = strrev($str);
   if ($check === $str) {
      echo "<b>$str</b> is a palindrome";
   } else {
       echo "<b>$str</b> is Not a palindrome";
   }
}
palindrome("madam");
?>
