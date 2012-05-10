<?php

class OpauthModule extends CWebModule {

	public $opauthParams = array();

	public function init() {
		$this->setImport(array(
			'opauth.vendors.Opauth.Opauth',
		));
		$path = Yii::app()->createUrl($this->id) . '/';
		if ($_SERVER['REQUEST_URI'] != $path . 'callback') {
			$this->opauthParams['path'] = $path;
			$this->opauthParams['Callback.uri'] = '{path}callback';
			$opauth = new Opauth($this->opauthParams);
		}
	}

	public function beforeControllerAction($controller, $action) {
		if (parent::beforeControllerAction($controller, $action)) {
			return true;
		}
		else
			return false;
	}

}
