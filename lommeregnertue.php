<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
button {
	background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;

} 

.box {
	margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
}
</style>

</head>
<body>

<div class="box">
<h1>Lommeregner</h1>

<form action="<?=$SERVER['PHP_SELF']?>" method="get">
	<input type="text" name="val1" /><br>
	<input type="text" name="val2" /><br>
	<button type="submit" name="operator" value="add">+</button>
	<button type="submit" name="operator" value="sub">-</button>
	<button type="submit" name="operator" value="multiply">*</button>
	<button type="submit" name="operator" value="divide">/</button>

</form>



<?php 
	//$val1 = $_GET['val1'];
	//$val2 = $_GET['val2'];
	$op = $_GET['operator'];
	$v1 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_INT) or die('missing or illigal val1 parameter');
	$v2 = filter_input(INPUT_GET, 'val2', FILTER_VALIDATE_INT) or die('missing or illigal val1 parameter');
	
 


 switch ($op) {
  	case 'add':
  		$res = $v1+$v2;
  		$opchar = '+';
  		break;
  	case 'sub':
  		$res = $v1-$v2;
  		$opchar = '-';
  		break;
  	case 'multiply':
  		$res = $v1*$v2;
  		$opchar = '*';
  		break;
  	case 'divide':
  		$res = $v1/$v2;
  		$opchar = '/';
  		break;
  	default:
  		$res = 'unknown operator "'.$op.'"';
  		$opchar = 'op'; 
  		break;
  }

  echo $v1. ' '.$opchar. ' '.$v2.' =  '.$res;

 ?>
</div>

</body>
</html>