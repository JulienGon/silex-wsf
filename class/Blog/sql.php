<?php

namespace Blog; 

use PDO; 

Class Sql
{
	public $pdo; 
	public $server; 
	public $database; 
	public $id;
	public $password; 


	/**
	 * [__construct description]
	 * @param [type] $server
	 * @param [type] $database
	 * @param [type] $id
	 * @param [type] $password
	 */
	public function __construct($server, $database, $id, $password)
	{
		$this->server = $server; 
		$this->database = $database; 
		$this->id = $id; 
		$this->password = $password; 


		$dsn = 'mysql:dbname='.$database.';host='.$server;
		$this->pdo = new PDO($dsn, $id, $password); 
	}

	/**
	 * [Execute une requête sql]
	 * ATTENTION : PDO query ne sécurise pas la requête
	 * C'est à vous de le faire
	 *
	 * * @param  string $sql    [description]
	 * @return [type] $argument   [description]
	 * @return [type]     [description]
	 */
	public function query ($sql)
	{
		return $this->pdo->query($sql); 

	}


	/**
	 * [prepareExec description]
	 * @param  [type] $sql
	 * @return [type]
	 */
	public function prepareExec($sql)
	{
		$statement = $this->pdo->prepare($sql);
		$statement->execute($argument); 

		return $statement; 
	}


}