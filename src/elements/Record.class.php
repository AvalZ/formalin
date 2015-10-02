<?php

namespace Formalin\Elements;

abstract class Record {
	private $table;

	protected $keys = array();
	protected $id;
	protected $children;

	/**
	 * @return array<Record>
	 */
	public static function all() {
		return $this->table->all();
	}

	/**
	 * @return Record
	 */
	public static function find(int $id) {
		return $this->table->find($id);
	}

	public function save() {
		if ($this->id != null) {
			$this->table->update($this);
		} else {
			$this->id = $this->table->create($this);
		}
	}
}
