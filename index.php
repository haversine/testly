<?php

require'config.php';
require'classes/user.php';
require'classes/Request.php';
require'classes/database.php';


if (file_exists('controllers/'.$request->controller.'.php'))
{
require 'controllers/'.$request->controller.'.php';
	//uus controller stringist - nt. 'tests';
$controller = new $request->controller;
if (isset($controller->requires_auth)){
	$_user->require_auth();
}
$controller->{$request->action}();
}
else {
	echo "The Page'{$request->controller}' does not exist";
	//var_dump($request->controller);
}
