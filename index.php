<?php

if(isset($_POST['sum']) || isset($_POST['diff']) ||  isset($_POST['prod']) || isset($_POST['all'])){
	
include "model/Calculator.php";

include "library.php";

$message=$sum=$diff=$prod='';

$number1 = filter_inputdata($_POST['number1']);
$number2 = filter_inputdata($_POST['number2']);

if(isset($_POST['number1']) && isset($_POST['number1']) && $number1 !='' && $number2 !=''  ){ //validating Input params
	if($number1 >0 && $number2 >0  ){ //validating if both input params are numeric or not
	        $mycalc = new Calculator(); 
			$mycalc->setNumber1($number1);
			$mycalc->setNumber2($number2);
            $error =false;
			if(isset($_POST['sum'])){
				$action = 'sum';
				$sum = $mycalc-> calcSum();
				  
			}
			if(isset($_POST['diff'])){
				$action = 'diff';
				$diff = $mycalc-> calcDifference();
				
			}
			if(isset($_POST['prod'])){
				$action = 'prod';
				$prod = $mycalc-> calcProduct();
				
			}
			if(isset($_POST['all'])){
				$action = 'all';
				$sum = $mycalc-> calcSum();
				$diff = $mycalc-> calcDifference();
				$prod = $mycalc-> calcProduct();
				 
			}
	
}else{
	    $error =true;
		$message = "Both Number1 and Number2 should be Numeric.<br><br>";
	}
}else{
	$error =true;
    $message = "Both Number1 and Number2 are required to perform the Operations.<br><br>";	
}

include "view/sumdiffprod22.php";

}else{
	
include "view/sumdiffprod21.php";

}

?>
