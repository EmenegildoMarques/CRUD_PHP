<?php
namespace app\Model;


//conexao

class  Conexao
{

	private static $instancia;

	public static function getConn(){

		if (!isset(self::$instancia)) {
			
			self::$instancia = new \PDO('mysql: host=localhost;dbname=crud','root','');

			return self::$instancia;

		}else{
			return self::$instancia;
		}	
	}	
		
}