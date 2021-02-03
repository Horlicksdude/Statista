<?php
use PHPUnit\Framework\TestCase;

Class multiplesTest Extends TestCase
{
	public function testFailure1()
	{
		$a = 59;
		$this->assertEquals(($a%5 + $a%3), 0, "Modulo comparison shows that value is not a multiple of 5 and 3");
	}

	public function testFailure2()
	{
		$b = 26;
		$this->assertEquals($b%3, 0, "Modulo comparison shows that value is not a multiple of 3");
	}

	public function testFailure3()
	{
		$c = 54;
		$this->assertEquals($c%5, 0, "Modulo comparison shows that value is not a multiple of 5");
	}

	public function test()
	{
		$this->assertNotEquals(83, 83, "Values are equal but not multiples of 3 or 5");
	}
}
?>



	
