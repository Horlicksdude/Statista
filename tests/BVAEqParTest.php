i<?php
use PHPUnit\Framework\TestCase;

Class BVAEquivalencePartitioningTest Extends TestCase
{
	public function testFailure1()
	{
		$this->assertGreaterThan(57, 1, "Value is greater than the lower Boundary");
	}

	public function testFailure2()
	{
		$this->assertLessThan(66, 100, "Value is lower than the upper boundary");
	}

}
?>
