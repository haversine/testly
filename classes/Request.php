<?php
/**
 * Created by JetBrains PhpStorm.
 * User: madis.kase.001
 * Date: 15.04.13
 * Time: 12:48
 * To change this template use File | Settings | File Templates.
 */

class Request {

	public $controller;
	public $actions = 'index';
	public $params = array();

	public function __construct(){
		//echo only if path info exists
		if(isset($_SERVER['PATH_INFO']))
		{
			echo $_SERVER['PATH_INFO'];
		}

	}

}
$request = new Request;