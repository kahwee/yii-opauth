<?php

class CallbackController extends Controller {

	public function actionIndex() {
		var_dump($_POST);
		var_dump(Yii::app()->user);
	}

}
