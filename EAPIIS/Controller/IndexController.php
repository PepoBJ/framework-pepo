<?php namespace EAPIIS\Controller;

	use EAPIIS\Core\ControladorBase;

	class IndexController extends ControladorBase
	{
		
		/*		INDEX 		*/
		
		public function index()
		{
			$this->view('index');
		}
		
		/*	**	*/
	}