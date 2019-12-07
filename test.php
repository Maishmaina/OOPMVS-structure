
<!--this is the new function of the oop .php class and Object-->
<?php
 //creating the new class defination...
/**
 * 
 */
/*class User{
//create the property that will be used withn
public  $proprty = 'Daniel';
//this is method function....
public function sayMethod(){
	return 'this is the method OutPut';
}
}
//create the Object...
$user = new User();
echo $user->proprty;
echo '<br>';
echo $user->sayMethod();*/

//thus is themethod thatcan be used to make the class new...
/*class Daniel{
public $maina; 

public function myFunction(){
	return $this->maina .' This is the method of the class Daniel';
}
}
//instantisting the Object to methods within.. the class...

$object = new Daniel();
$object->maina='String NO. one';
echo $object->maina;
echo "<br>";
echo $object->myFunction();
echo "<br>";
//creatint new user....
$object1 = new Daniel();
$object1->maina='String NO. two';
echo $object1->myFunction() ."Function Object1";
echo "<br>";
echo $object->maina ." This is the new Object1";
echo "<br>";

//create theObject that  will be used to assertain them that you are truely learning,,,,,
//and haer goes the code that was expected...
class Tester{
	//this are property which are same like the Variable ...
	public $hotter;
	//haer goes the Method....
	public function Hotest(){
		return $this->hotter.'<p style="color:pink;">I was Just testing the vunerability of the method...</p>';
	}
}
//create some instance of the class which are the Objects...
$Daniels = new Tester();
$Daniels->hotter="Please ensure that you will get the right marks befor we give the whole block";
echo $Daniels->hotter;
echo "<br>";
$Daniels->Hotest();
echo $Daniels->Hotest();
//this is the concept of constructer,,,....
class Next{
	//this are the property..
	public $name;
	public $age;
	//create the Constructer.. which will run when the object is instantiated...
	public function __construct($name,$age){
		echo'Class '.__CLASS__.' instantiated within the Constractor';
		echo "<br>";
		$this->name= $name;
		$this->age= $age;
	}
	//create the function ..method...
	public function GoodDay(){
		return $this->name . ' Hi.. you are the new User';

	}
	//create the Distrucort...to clear whe their is no other Object 
	public function __destruct(){
		echo "destructor is now running";
	} 

}
//Instantiating the Object...
$Kabiru = new Next('DANIEL',23);
//fot constructor...
echo $Kabiru->name.' is the now gitHub and is ' . $Kabiru->age.' Years Old';
echo "<br>";
echo $Kabiru->GoodDay();echo "<br>";
//create the new Object to fron the class Next..
$Obj= new Next('Mwaniki',22);
echo $Obj->name.' rhe IT expert is '. $Obj->age. ' years now';
echo "<br>";
echo $Obj->GoodDay();
echo "<br>";
*/
//now use the method private and getter as well  as  seter
/*class Getterz{
	//this proprty are which are accessible wirhin the class only
	
	private $name;
	private $age;
	//this are the  method...
	public function __construct($name, $age){
		$this->name=$name;
		$this->age = $age;
	}

//this are the getter
	public function getName(){
		return $this->name;
	}
	//now create the setter.
	public function setName($name){
		$this->name = $name;
	}
	//get the magic get method....
	public function __get($property){
		//check if the property exist...
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}
	//the magic method __set(''');;
	public function __set($property,$value){
		//check if the prperty exsi
		if(property_exists($this,$property)){
			$this->$property = $value;
		}
	return $this;//return back the content.. 
	}
}
//this is Object instantiatiuons...
$userz= new Getterz('James',23);

//return the content though echo statement
/*echo $userz->setName('Daniel');
echo $userz->getName(); */
//the margic call
//echo $userz-> __get('age');
//$userz-> __set('age',21);
//echo $userz -> __get('age');

//31/01/19 tsstint the water to see if they are safe for me..
/*class Gettest{
	private $name;
	private $age;
	//create the constructror..
	public function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
	}
//creat getter and seeter of the above private variable/ property
	public function getName(){
	return $this->name;
}
//create the setter
public function setName($name){
 $this->name=$name;
}
//usimg the margic getter

public function __get($property){
	//test if the property exist...
	if (property_exists($this, $property)) {
		return $this->$property;
	}
}
//creatint the setters
public function __set($property,$value){
	if (property_exists($this, $property)) {
		$this->$property=$value;
	}return $this;
}

}  
//create the Object....
$user1 = new Gettest('Daniel',23);
echo $user1->setName('Kabiru');
echo $user1->getName();
 $user1-> __set('name','Maina');
echo $user1-> __get('name');
*/

//creating the inheritance
/**
 * 
 */
/*class User{
	protected $name;
	protected $age;
	public function __construct($name,$age){
         $this->name=$name;
		$this->age=$age;
	}
	
}
class Customer extends User{
	private $balace;
	public function __construct($name,$age,$balance){
		//call the cunstructor above..
		parent:: __construct($name,$age);
   $this->balance=$balance;
	}
	//get the getter for the balance..
	public function getBalance(){
		return $this->balance;
	}
//creat a method inside
	public function Pay($amout){
		return $this->name.' paid $'.$amout. ' His age is '.$this->age;
	}
}
//cra=eate the Object..
$customer1 = new Customer('Maina',33,1000);
//echo $customer1->Pay(100);
echo $customer1->getBalance();*/


//creating the static method... and property..
class User{
	public $name;
	public $age;
	public static $minPassLength=6;
	public static function ValidatePass($pass){
		if (strlen($pass)>= self::$minPassLength) {
		return true;
		}else{return false;}
	}
}
$password='Daniel';
if (User::ValidatePass($password)) {
	echo 'Password Valid';
}else{echo 'Password Invalid';}
?>
