<?php


namespace App\Services;


class NumberConverter
{
    private $arabicNumbers = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
    private $romanNumbers = ['M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I'];

    public function arabicToRoman (Int $number) {
        $romanString = "";

        foreach ($this->arabicNumbers as $key => $arabicNumber) {

            $rest = $number % $arabicNumber;

            if ($rest !== $number) {
                $divider = $number - $rest;
                $numberOfArabicNumber = $divider / $arabicNumber;

                while ($numberOfArabicNumber > 0) {
                    $romanString .= $this->romanNumbers[$key];
                    $numberOfArabicNumber--;
                }

                $number -= $divider;
            }

        }

        return $romanString;
    }

}
