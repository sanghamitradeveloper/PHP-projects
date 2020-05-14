<?php  if($error){ 
	    echo $message;
 
}else{
   if($action == 'sum'){  ?> 
            <label>SUM = </label><?php echo $sum; ?> <br><br> 
<?php } ?>
<?php if($action == 'diff'){  ?> 
            <label>DIFFERENCE = </label><?php echo $diff; ?> <br><br> 

<?php } ?>
<?php if($action == 'prod'){  ?> 
            <label>PRODUCT = </label><?php echo $prod; ?> <br><br> 

<?php } ?>
<?php if($action == 'all'){  ?> 
            <label>SUM = </label><?php echo $sum; ?> <br><br> 
			<label>DIFFERENCE = </label><?php echo $diff; ?> <br><br> 
            <label>PRODUCT = </label><?php echo $prod; ?> <br><br> 

<?php } 
}  
?>
<a href="index.php">BACK</a>
	

