# WEEK ONE ASSIGNMENT

## 1. Build a php function to check if a passed in string is an Anagram

## 2. Build a php function to check if a passed in string is a Palindrome


- Anagram function
* An anagram is a word that forrms another word using the eact same characters present in the first word without repeating the each character more than the number of times they appear in the main word.
           ** Example: **  moan -> mano, noma, anom, noam, namo, onam, oman, amon.

           * Note that each character was not repeated more than the number of times it appeared in the main word.

* The anagram function accepts two strings parameters. The first parameter collects the main word and the second parameter accepts the word you have formed using the word in the first parameter. The functions splits your two different words into two different arrays, arranges them in an ascending order using the sort(); and then it crosschecks the alphabets presents then returns a result showing if your word is an anagram of the maain word.



- Palindrome
* A palindrome is a word that, when re-arranged backwards forms the same original word
        ** Example: ** Mom, Mum, Dad, Did, Wow, madam - re-writing them backwards gives you that same word.

* * The palindrome function accepts a string parameter, reverses it and checks if it is strictly equal to the string pased. It returns the result if the test was passed.