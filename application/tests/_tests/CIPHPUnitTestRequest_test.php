<?php

/**
 * @group ci-phpunit-test
 */
class CIPHPUnitTestRequest_test extends TestCase
{
	/**
	 * @expectedException LogicException
	 * @expectedExceptionMessage Status code is not set
	 */
	public function test_getStatus()
	{
		$obj = new CIPHPUnitTestRequest($this);
		$obj->getStatus();
	}
}
