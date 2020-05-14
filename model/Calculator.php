<?php 
class Calculator {
	
private $_fval, $_sval;

public function __construct() {

    $this->_sval = '';$this->_fval = '';
   
}

public function setNumber1($num){
  
     $this->_fval = $num;
  
} 
public function getNumber1(){
  
     return $this->_fval;
}  
public function setNumber2($num){
  
      $this->_sval = $num;
  
} 
public function getNumber2(){
  
     return $this->_sval;
}  
public function calcSum() {
	
return $this->getNumber1()  + $this->getNumber2();

}
public function calcDifference() {
	
return $this->getNumber1()  - $this->getNumber2();

}
public function calcProduct() {
	
return $this->getNumber1() * $this->getNumber2();

}

}

?>