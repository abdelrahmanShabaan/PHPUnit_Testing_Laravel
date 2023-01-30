<?php

namespace Tests\Unit;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    
    public function testAddTwoNumbers(){
            // given 
            $calculator = new Calculator;

            // when
            $total = $calculator->add(1,1);

            //result
            $this->assertEquals(2 , $total);
    }

    public function testMinusTwoNumbers(){
        // given 
        $calculator = new Calculator;

        // when
        $total = $calculator->minuse(2,1);

        //result
        $this->assertEquals(1 , $total);
}

    public function testDivideTwoNumbers(){
    // given 
    $calculator = new Calculator;

    // when
    $total = $calculator->divide(4,2);

    //result
    $this->assertEquals(2 , $total);
}

}
