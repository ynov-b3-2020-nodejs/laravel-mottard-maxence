<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NumberControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testArabicToRomanRoute()
    {
        $response = $this->get('/api/arabicToRoman/3321');

        $response
            ->assertStatus(200)
            ->assertJson([
                'romanNumber'   =>  'MMMCCCXXI'
            ]);
    }
}
