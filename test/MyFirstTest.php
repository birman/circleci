<?php 

use PHPUnit\Framework\TestCase;

class MyFirstTest extends TestCase
{
    public function testHelloWorld()
    {
        $this->assertEquals("hello world", "hello world");
    }

    public function testBoolean()
    {
        $this->assertFalse('1' === 1);
    }
}