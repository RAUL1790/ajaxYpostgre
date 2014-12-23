<?php 

 include ('conexion.php');
 $funcion = $_POST['funcion'];
 
  if($funcion == "uno"){
	  $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
	  $arr['f'] = $funcion;
	 // array_push($arr,"red","yellow");
	  echo json_encode($arr);
  }




?>