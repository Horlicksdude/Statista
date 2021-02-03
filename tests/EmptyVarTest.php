<?php
use PHPUnit\Framework\TestCase;

Class EmptyTest Extends TestCase
{
	public function testFailure()
	{
		$this->assertEmpty('fizz');
	}

	public function testFailure2()
	{
		$this->assertEmpty('');
	}

	public function testFailure3()
	{
		$html = 'fizzbuzz';
		$this->assertEmpty($html, "html is not empty");
	}

	public function testFailure4()
	{
		$html2 = '';
		$this->assertEmpty($html2, "html2 is not empty");
	}
}
?>
