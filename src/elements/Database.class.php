<?php

namespace Formalin\Elements;

abstract class Database {
	protected $type;

	protected $name;
	protected $address;
	protected $username;
	protected $password;

	protected $connectionString;

	public $dbh;
	
	public function __construct(
		$type,
		$address,
		$name,
		$username,
		$password
	)
	{
		$this->type = $type;
		$this->address = $address;
		$this->name = $name;
		$this->username = $username;
		$this->password = $password;

		$dbh = new \PDO(
			"$type:host=$address;dbname=$name",
			$username,
			$password
		);
	}

	abstract public function connect();
	abstract public function disconnect();

}
