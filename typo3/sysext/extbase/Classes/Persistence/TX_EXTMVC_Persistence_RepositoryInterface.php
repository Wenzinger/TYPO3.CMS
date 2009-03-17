<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Jochen Rau <jochen.rau@typoplanet.de>
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
 * Contract for a repository
 *
 * @package TYPO3
 * @subpackage extmvc
 * @version $ID:$
 */
interface TX_EXTMVC_Persistence_RepositoryInterface {

	/**
	 * Sets the class name of the aggregare root
	 *
	 * @param string $aggregateRootClassName 
	 * @return void
	 */
	public function setAggregateRootClassName($aggregateRootClassName);

	/**
	 * Returns the class name of the aggregare root
	 *
	 * @return string The class name of the aggregate root
	 */
	public function getAggregateRootClassName();

	/**
	 * Adds an object to this repository.
	 *
	 * @param object $object The object to add
	 * @return void
	 */
	public function add($object);

	/**
	 * Removes an object from this repository.
	 *
	 * @param object $object The object to remove
	 * @return void
	 */
	public function remove($object);

}
?>