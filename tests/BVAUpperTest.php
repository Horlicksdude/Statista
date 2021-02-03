i<?php
use PHPUnit\Framework\TestCase;

Class BVAUpperBoundaryTest Extends TestCase
{
	public function testFailure1()
	{
		$this->assertLessThan(99, 100, "Value is less than the upper Boundary");
	}

	public function testFailure2()
	{
		$this->assertEquals(99, 100, "Value is not the upper boundary");
	}

	public function testFailure3()
	{
		$this->assertGreaterThan(101, 100, "Value is greater than the upper boundary");
	}

}
?>
