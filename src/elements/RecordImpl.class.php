<?php

class RecordImpl extends Record {
	public $value1;
	public $value2;
	public $valueN;

	/**
	 * @param array $tableRow
	 */
	public function __construct($tableRow) {
		$this->value1 = $tableRow['value1'];
		$this->value2 = $tableRow['value2'];
		$this->valueN = $tableRow['valueN'];
		// TODO: Modificare con foreach
		// $this->{$key} = $tableRow[$key];
	}
}

