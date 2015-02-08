<?php namespace SuperPowers\Datasource;

class Score extends SuperDatasource {


	function get()
	{
		if(empty($this->data))
		{
			$this->data = array(
				'0.0' => "0.0",
				'0.5' => "0.5",
				'1.0' => "1.0",
				'1.5' => "1.5",
				'2.0' => "2.0",
				'2.5' => "2.5",
				'3.0' => "3.0",
				'3.5' => "3.5",
				'4.0' => "4.0",
				'4.5' => "4.5",
				'5.0' => "5.0"
			);
		}

		return $this->data;
	}

}