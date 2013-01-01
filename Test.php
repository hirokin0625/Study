<?php
class ExampleTest extends PHPUnit_Framework_TestCase
{

    function testSomething()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
        $this->assertNull(null);
        $this->assertEquals(2, "2");
        $this->assertSame(3, 3);
    }
 
    function testFizz()
    {
        $input = 3;
        $obj = new Tsubo();
        $actual = $obj->answer($input);
        $expected = "Fizz";
        $this->assertEquals($expected, $actual);
    }

    function testNotFizz()
    {
        $input = 2;
        $obj = new Tsubo();
        $actual = $obj->answer($input);
        $expected = 2;
        $this->assertEquals($expected, $actual);
    }

    function testBuzz()
    {
        $input = 5;
        $obj = new Tsubo();
        $actual = $obj->answer($input);
        $expected = "Buzz";
        $this->assertEquals($expected, $actual);
    }


}
