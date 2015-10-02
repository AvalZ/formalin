<?php

namespace Formalin\Elements;

abstract class Table {
	protected $name;
	protected $db;

	public function __construct($name, $db) {
		$this->name = $name;
		$this->db = $db;
	}

	/**
	 * @return array<Record>
	 */
	public abstract function all();

	/**
	 * @return Record
	 */
	public abstract function find(int $id);

	public abstract function update(Record $record);

	/**
	 * @return int The created record's ID
	 */
	public abstract function create(Record $record);

}
