<?php
namespace Netcbakerlist\NetcBakerlist\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class Netcbakerlist\NetcBakerlist\Controller\AddressesController.
 *
 */
class AddressesControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Netcbakerlist\NetcBakerlist\Controller\AddressesController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Netcbakerlist\\NetcBakerlist\\Controller\\AddressesController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllAddressessFromRepositoryAndAssignsThemToView() {

		$allAddressess = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$addressesRepository = $this->getMock('Netcbakerlist\\NetcBakerlist\\Domain\\Repository\\AddressesRepository', array('findAll'), array(), '', FALSE);
		$addressesRepository->expects($this->once())->method('findAll')->will($this->returnValue($allAddressess));
		$this->inject($this->subject, 'addressesRepository', $addressesRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('addressess', $allAddressess);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenAddressesToView() {
		$addresses = new \Netcbakerlist\NetcBakerlist\Domain\Model\Addresses();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('addresses', $addresses);

		$this->subject->showAction($addresses);
	}
}
