<?php 

 include ('conexion.php');
 $funcion = $_POST['funcion'];
 
  if($funcion == "uno"){
	  $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
	  $arr['f'] = $funcion;
	 // array_push($arr,"red","yellow");
	  echo json_encode($arr);
  }

  if($funcion == "dos"){
   $res = pg_query($conexion , "SELECT * FROM tabla");
   $a = array();
   while($row = pg_fetch_assoc($res)){
    array_push($a,$row);
   }
   echo json_encode($a);

  }


?>