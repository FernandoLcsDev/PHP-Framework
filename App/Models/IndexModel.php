<?php
	namespace App\Models;

	use PF\Model\Model;

	class IndexModel extends Model {

		private $classAttr;

		public function __get($attribute) {
			return $this->$attribute;
		}

		public function __set($attribute,$value) {
			$this->$attribute = $value;
		}

		public function indexModelFunction(){
			echo 'indexModelFunction';
		}
	}

?>