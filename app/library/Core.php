<?php
//Application core class
//that create Url and load the core controller
//then Url wil be in the form
///controller/method/params
class Core{
	protected $currentController = 'Pages';
	protected $currentMethod= 'index';
    protected $params = [];

  //craeting the constructor for the getUrl 
  public function __construct(){
  	//print_r($this->getUrl());
  	$url = $this->getUrl();
  	//look for the controller...
  	if (file_exists('../app/controllers/' .ucwords($url[0]).'.php')) {
  		//if it exist set ac controller
  		$this->currentController = ucwords($url[0]);
  		//unset the zero index...
  		unset($url[0]);
  	}
  	//require the controller...
  	require_once '../app/controllers/'. $this->currentController .'.php';
  	//instantiate the controller
  	$this->currentController = new $this->currentController;
  	//check fot the second part of the URL..
  	if (isset($url[1])) {
  		//check if method exist
  		if (method_exists($this->currentController, $url[1])) {
  			$this->currentMethod= $url[1];
  			//Unset URL 1;
  			unset($url[1]);
  		}
  	}
  	//get the params...
  	$this->params = $url ? array_values($url) : [];

  	//call back with an array of params..
  	call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
  }  



public function getUrl(){   
	//chech if it is check....
	if (isset($_GET['url'])) {
		$url = rtrim($_GET['url'], '/');
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$url = explode('/', $url);
		return $url;

	}
}
}
