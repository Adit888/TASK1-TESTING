<?php

namespace Tests\Unit;

use App\Helpers\CalculatorHelper;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CalculatorHelperTest extends TestCase
{
    public function testIsPrimeSum()
    {
        $this->assertTrue(CalculatorHelper::isPrimeSum(2, 3));   // 5 → Prime
        $this->assertFalse(CalculatorHelper::isPrimeSum(2, 2));  // 4 → Not prime
        $this->assertTrue(CalculatorHelper::isPrimeSum(5, 6));   // 11 → Prime
        $this->assertFalse(CalculatorHelper::isPrimeSum(0, 0));  // 0 → Not prime
        $this->assertTrue(CalculatorHelper::isPrimeSum(10, 3));  // 13 → Prime
    }


    // public function testPerkalian(){
    //     $this->assertEquals(4, CalculatorHelper::perkalian(a: 2, b: 2));
    // }


    // public function testMultiplePerkalian()
    // {
    //     $cases = [
    //         [2, 2, 4],
    //         [3, 2, 6],
    //         [5, 2, 10]
    //     ];

    //     foreach ($cases as [$a, $b, $expected]) {
    //         $this->assertEquals($expected, CalculatorHelper::perkalian($a, $b));
    //     }
    // }


    // public function testAddition()
    // {
    //     $this->assertEquals(5, CalculatorHelper::add(2, 3));
    // }

    // public function testSubtraction()
    // {
    //     $this->assertEquals(1, CalculatorHelper::subtract(4, 3));
    // }

    // public function testMultipleTestCase()
    // {
    //     $cases = [
    //         [2, 3, 5],
    //         [0, 0, 0],
    //         [-1, 1, 0],
    //         [10, 5, 15],
    //     ];

    //     foreach ($cases as [$a, $b, $expected]) {
    //         $this->assertEquals($expected, CalculatorHelper::add($a, $b), "Failed on: $a + $b");
    //     }
    // }


    // // Alternatif DRY (Dont Repeat Yourself)
    // #[DataProvider('additionProvider')]
    // public function testAdditionWithDataProvider($a, $b, $expected)
    // {
    //     $this->assertEquals($expected, CalculatorHelper::add($a, $b));
    // }

    // public static function additionProvider()
    // {
    //     return [
    //         [2, 3, 5],
    //         [0, 0, 0],
    //         [-1, 1, 0],
    //         [10, 5, 15],
    //     ];
    // }
}
