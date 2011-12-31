<?php

/**
 * Class for the user object
 *
 * @author gal
 *
 */
namespace Trans;

use Trans;

class User {
	/**
	 * Username
	 *
	 * @var string $_name
	 */
	private $_name = null;

	/**
	 * @var string $_password
	 */
	private $_password = null;

	/**
	 *
	 */
	public function __construct($uname, $passwd) {
		$this->_name = $uname;
		$this->_password = $passwd;
	}

	public function __destruct() {

	}
	/**
	 * Get user from database by user name
	 *
	 * @param string $name
	 */
	public function getByName($name) {

	}
	/**
	 * Get user from database by user id
	 *
	 * @param int $id
	 */
	public function getById($id) {

	}

	/**
	 * Is user allowed to access the system
	 */
	public function isAllowed() {

	}
}
