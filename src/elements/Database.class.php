<?php

namespace Formalin\Elements;

class Database {
	protected $name;
	protected $address;
	protected $username;
	protected $password;

	public function __construct(
		$address,
		$name,
		$username,
		$password
	)
	{
		$this->address = $address;
		$this->name = $name;
		$this->username = $username;
		$this->password = $password;
	}

}
