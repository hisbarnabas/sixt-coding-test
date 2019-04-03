<?php

class Palindrome
{
    /**
     * @param string $word
     * @return bool
     */
    public static function isPalindrome($word)
    {
        // ignore empty spaces and case.
        $preprocessed = str_replace(" ", "", trim(strtolower($word)));
        return (strrev($preprocessed) == $preprocessed);
    }
}