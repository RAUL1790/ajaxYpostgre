<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
	$(function(){

     alert($('#bonton_').attr('id', 'value'));
      $('#bonton_'+10).hide();

	});
</script>
</head>
<body>
	 
  <div id="uno">funcion numero uno</div> 

 <div id="dos">funcion numero dos</div> 

</body>

<script type="text/javascript" src="js/funciones.js"></script>

<button id="bonton_<?php echo "10";?>" value="Presiona">Presiona</button>

</html>