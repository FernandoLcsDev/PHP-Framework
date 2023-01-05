<?php
	namespace App\Controllers;

	use PF\Controller\Action;
	use PF\Model\Container;

	class IndexController extends Action{

		public function index(){

			$index = Container::getModel('IndexModel');
			$index->indexModelFunction();
			
			$this->render('home','layout');
		}

		
	}

?>