<?php
namespace WCCT;
 
use phpmock\phpunit\PHPMock;
 
class UnitTests extends \PHPUnit_Framework_TestCase{
    use PHPMock;

public function test_wct_get_option()

{
$this->assertEquals('river-club',wcct_get_option('venue'));

}
	/**
	 * A single example test.
	 */
	function test_sample() {
		// Replace this with some actual testing code.
		$this->assertTrue( true );
	}
}
