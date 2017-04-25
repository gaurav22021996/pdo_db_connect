<?php
ob_start();

class database{
	private $func;
	function __construct($pdo)
	{
	$this->pdo=$pdo; 	
	}
	
	
}