<?php
/*PDO  database class
 thst will connect to the database;
 create prepare statment
 bind values
 return row and result
*/
 class Database{
 	private $host= DB_HOST;
 	private $user = DB_USER;
 	private $pass= DB_PASS;
 	private $dbname=DB_NAME;
//create the db handler...
 	private $dbh;
 	private $stmt;
 	private $error;

 	public function __construct(){
 		//creat the DSN
 		$dsn= 'mysql:host=' .$this->host . ';dbname=' . $this->dbname;
 		$options= array(
       PDO::ATTR_PERSISTENT =>true,
       PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
 		 );
 		//create the PD instance...
 		try{
 			//we have to test something befor we gat the actual method..\
 			$this->dbh = new PDO($dsn, $this->user,$this->pass, $options);

 		}catch(PDOException $e){
           $this->error= $e->getMessage();
           echo $this->error;

 		}
 	}
 //methos that will be used to write queries....
 	//prepare statement
 	public function query($sql){
 		$this->stmt = $this->dbh->prepare($sql);
 	}
 	//Bind value inside 
 	public function bind($param,$value,$type=null){
     if(is_null($type)){
     	switch(true){
     		case is_int($value):
     		  $type= PDO::PARAM_INT;
     		  break;
     		case is_bool($value):
     		  $type= PDO::PARAM_BOOL;
     		  break;
     		case is_null($value):
     		  $type= PDO::PARAM_NULL;
     		  break;
     		default:
     		  $type= PDO::PARAM_STR;
     		  
     	}
     }
     $this->stmt->bindValue($param,$value,$type);
 	}
 	//now execute the prepared query...
public function execute(){
	return $this->stmt->execute();
 }
//get result set as array of Object.
 public function resultSet(){
 	$this->execute();
 	return $this->stmt->fetchAll(PDO::FETCH_OBJ);
 }
 //get a single object from the database
 public function single(){
 	$this->execute();
 	return $this->stmt->fetch(PDO::FETCH_OBJ);
 }
 //get the entire row count....
public function rowCount(){
	return $this->stmt->rowCount();
}  
}
