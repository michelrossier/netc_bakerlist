<?php
namespace Netcbakerlist\NetcBakerlist\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Addresses
 */
class Addresses extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * vorname
	 *
	 * @var string
	 */
	protected $vorname = '';

	/**
	 * adresse
	 *
	 * @var string
	 */
	protected $adresse = '';

	/**
	 * plz
	 *
	 * @var integer
	 */
	protected $plz = 0;

	/**
	 * ort
	 *
	 * @var string
	 */
	protected $ort = '';

	/**
	 * email
	 *
	 * @var string
	 */
	protected $email = '';

	/**
	 * wwwLink
	 *
	 * @var string
	 */
	protected $wwwLink = '';

	/**
	 * tel
	 *
	 * @var string
	 */
	protected $tel = '';

	/**
	 * fax
	 *
	 * @var string
	 */
	protected $fax = '';

	/**
	 * glutenfrei
	 *
	 * @var boolean
	 */
	protected $glutenfrei = FALSE;

	/**
	 * region
	 *
	 * @var string
	 */
	protected $region = '';

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the vorname
	 *
	 * @return string $vorname
	 */
	public function getVorname() {
		return $this->vorname;
	}

	/**
	 * Sets the vorname
	 *
	 * @param string $vorname
	 * @return void
	 */
	public function setVorname($vorname) {
		$this->vorname = $vorname;
	}

	/**
	 * Returns the adresse
	 *
	 * @return string $adresse
	 */
	public function getAdresse() {
		return $this->adresse;
	}

	/**
	 * Sets the adresse
	 *
	 * @param string $adresse
	 * @return void
	 */
	public function setAdresse($adresse) {
		$this->adresse = $adresse;
	}

	/**
	 * Returns the plz
	 *
	 * @return integer $plz
	 */
	public function getPlz() {
		return $this->plz;
	}

	/**
	 * Sets the plz
	 *
	 * @param integer $plz
	 * @return void
	 */
	public function setPlz($plz) {
		$this->plz = $plz;
	}

	/**
	 * Returns the ort
	 *
	 * @return string $ort
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * Sets the ort
	 *
	 * @param string $ort
	 * @return void
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
	}

	/**
	 * Returns the email
	 *
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the wwwLink
	 *
	 * @return string $wwwLink
	 */
	public function getWwwLink() {
		return $this->wwwLink;
	}

	/**
	 * Sets the wwwLink
	 *
	 * @param string $wwwLink
	 * @return void
	 */
	public function setWwwLink($wwwLink) {
		$this->wwwLink = $wwwLink;
	}

	/**
	 * Returns the tel
	 *
	 * @return string $tel
	 */
	public function getTel() {
		return $this->tel;
	}

	/**
	 * Sets the tel
	 *
	 * @param string $tel
	 * @return void
	 */
	public function setTel($tel) {
		$this->tel = $tel;
	}

	/**
	 * Returns the fax
	 *
	 * @return string $fax
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * Sets the fax
	 *
	 * @param string $fax
	 * @return void
	 */
	public function setFax($fax) {
		$this->fax = $fax;
	}

	/**
	 * Returns the glutenfrei
	 *
	 * @return boolean $glutenfrei
	 */
	public function getGlutenfrei() {
		return $this->glutenfrei;
	}

	/**
	 * Sets the glutenfrei
	 *
	 * @param boolean $glutenfrei
	 * @return void
	 */
	public function setGlutenfrei($glutenfrei) {
		$this->glutenfrei = $glutenfrei;
	}

	/**
	 * Returns the boolean state of glutenfrei
	 *
	 * @return boolean
	 */
	public function isGlutenfrei() {
		return $this->glutenfrei;
	}

	/**
	 * Returns the region
	 *
	 * @return string $region
	 */
	public function getRegion() {
		return $this->region;
	}

	/**
	 * Sets the region
	 *
	 * @param string $region
	 * @return void
	 */
	public function setRegion($region) {
		$this->region = $region;
	}

}