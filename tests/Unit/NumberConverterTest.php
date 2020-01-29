<?php

namespace Tests\Unit;

use App\Services\NumberConverter;
use PHPUnit\Framework\TestCase;

class NumberConverterTest extends TestCase
{

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testArabicToRomanConvertion()
    {
        $converter = new NumberConverter();

        $this->assertEquals($converter->arabicToRoman(1), 'I');
        $this->assertEquals($converter->arabicToRoman(2), 'II');
        $this->assertEquals($converter->arabicToRoman(3), 'III');
        $this->assertEquals($converter->arabicToRoman(4), 'IV');
        $this->assertEquals($converter->arabicToRoman(5), 'V');
        $this->assertEquals($converter->arabicToRoman(10), 'X');
        $this->assertEquals($converter->arabicToRoman(50), 'L');
        $this->assertEquals($converter->arabicToRoman(78), 'LXXVIII');
        $this->assertEquals($converter->arabicToRoman(90), 'XC');
        $this->assertEquals($converter->arabicToRoman(100), 'C');
        $this->assertEquals($converter->arabicToRoman(1452), 'MCDLII');
    }
}
