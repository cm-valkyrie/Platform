<?php
defined('_EXEC') or die;

class Index_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return 'Hola mundo (model)';
	}

}
