<?php
use PHPUnit\Framework\TestCase;

Class BVALowerBoundaryTest Extends TestCase
{
	public function testFailure1()
	{
		$this->assertLessThan(0, 1, "Value is less than the Lower Boundary");
	}

	public function testFailure2()
	{
		$this->assertEquals(2, 1, "Value is not the lower boundary");
	}

	public function testFailure3()
	{
		$this->assertGreaterThan(2, 1, "Value is greater than the lower boundary");
	}

}
?>
