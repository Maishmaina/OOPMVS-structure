<?php
class Pages extends Controller{
	public function __construct(){
		

	}
	//solve the callback problem
	public function index(){
		$tata = ['title'=> 'This is the Dan Frame work php'];

  $this->view('pages/index',$tata);
	}
	public function about(){
		$tata=['title'=>'About Us'];
		$this->view('pages/about',$tata);
	}
} 
