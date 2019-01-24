<?php

function isanagram($word1, $word2) {

    #split each word to an array
    $firstword = str_split($word1);
    $secondword = str_split($word2);

    #re-arrange them in an ascending other
    sort($firstword);
    sort($secondword);
    
    #check if it matches the definition of an 
echo (($firstword === $secondword) ? "$word2 is an anagram of $word1" : "$word2 is not an anagram of $word1");

}

isanagram("test","sett");