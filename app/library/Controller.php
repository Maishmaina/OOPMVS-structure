<?php
/*
this is the base contrroller which will load the model and view//..
*/
class Controller{
	//Load model
	public function model($model){
//require model file...
		require_once '../app/models/' .$model .'.php';

		//instantiating the model
		return new $model();
	}
	//view method/function
	public function view($view, $data = []){
    //check fot ht eview file
		if (file_exists('../app/views/'.$view .'.php')) {
			require_once'../app/views/'.$view .'.php';
		}else{
			//View does not exist..
			die('View Does Not Exist');
		}
	}
}