<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Madis
 * Date: 17.04.13
 * Time: 11:47
 * To change this template use File | Settings | File Templates.
 */

class tests {

	public $requires_auth = true;

	function index(){

	global $request;
	global $_user;
	$tests = get_all("SELECT * FROM test INNER JOIN user ON test.deleted=0");
	require 'views/master_view.php';

	}
}