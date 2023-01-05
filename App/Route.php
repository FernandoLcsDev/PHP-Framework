<?php
	namespace App;

	use PF\Init\Bootstrap;

	class Route extends Bootstrap
	{

		public function initRoutes(){
			$this->routes['home'] = array(
				'index' => '/',
				'controller' => 'indexController',
				'action' => 'index'
			);

			$this->__set('routes', $this->routes);
		}

	}


?>