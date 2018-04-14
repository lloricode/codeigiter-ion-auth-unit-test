<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Login_test extends TestCase
{
	public function test_index()
	{

		$this->request('GET', 'auth');
		$this->assertResponseCode(200);
	}

}
