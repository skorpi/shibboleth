<?php
namespace Trstcnt\Shibboleth\Tests\Unit\Controller;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Test case for class Trstcnt\Shibboleth\Controller\LoginLinkController.
 *
 */
class LoginLinkControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Trstcnt\Shibboleth1\Controller\LoginLinkController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('Trstcnt\\Shibboleth\\Controller\\LoginLinkController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllLoginsFromRepositoryAndAssignsThemToView() {
		$this->markTestSkipped();
	}
}
