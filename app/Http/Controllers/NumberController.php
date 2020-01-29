<?php


namespace App\Http\Controllers;


use App\Services\NumberConverter;

class NumberController extends Controller
{
    private $converter;

    public function __construct(NumberConverter $converter)
    {
        $this->converter = $converter;
    }

    public function arabicToRoman($number) {

        return response()->json([
            'romanNumber' => $this->converter->arabicToRoman($number)
        ]);

    }

}
