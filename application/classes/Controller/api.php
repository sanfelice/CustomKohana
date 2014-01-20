<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends RESTful_Controller {
	
	public function action_get()
	{
		echo 'get';
	}
	public function action_update()
	{
		echo 'update';
	}
	public function action_create()
	{
		echo 'create';
	}
	public function action_delete()
	{
		echo 'delete';
	}
}

?>