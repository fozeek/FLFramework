<?php 
	/**********************************************************
	 **** File generated by fitzlucassen\DALGenerator tool ****
	 * All right reserved to fitzlucassen repository on github*
	 ************* https://github.com/fitzlucassen ************
	 **********************************************************/

	namespace fitzlucassen\FLFramework\Data\Entity;
	
	class Rewrittingurl {
		private $_id;
		private $_routeurl;
		private $_idRouteUrl;
		private $_urlMatched;
		private $_lang;

		public function __construct($id = "", $idRouteUrl = "", $urlMatched = "", $lang = ""){
			$this->fillObject(array("id" => $id, "idRouteUrl" => $idRouteUrl, "urlMatched" => $urlMatched, "lang" => $lang));
		}

		/***********
		 * GETTERS *
		 ***********/
		public function getId() {
			return $this->_id;
		}
		public function getRouteUrl() {
			$query = "SELECT * FROM routeurl WHERE idRouteurl=" . $this->_idRouteurl;
			try {
				return $this->_pdo->Select($query);
			}
			catch(\PDOException $e){
				print $e->getMessage();
			}
			return array();
		}

		public function getIdRouteUrl() {
			return $this->_idRouteUrl;
		}
		public function getUrlMatched() {
			return $this->_urlMatched;
		}
		public function getLang() {
			return $this->_lang;
		}
		/*******
		 * END *
		 *******/

		public function fillObject($properties) {
			if(!empty($properties["id"]))
				$this->_id = $properties["id"];
			if(!empty($properties["idRouteUrl"]))
				$this->_idRouteUrl = $properties["idRouteUrl"];
			if(!empty($properties["urlMatched"]))
				$this->_urlMatched = $properties["urlMatched"];
			if(!empty($properties["lang"]))
				$this->_lang = $properties["lang"];
		}
	}
?>