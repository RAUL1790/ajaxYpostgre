$(document).on('ready',function(){

	$.ajax({
		url: 'ajax.php',
		type: 'post',
		dataType: 'json',
		data: {'funcion':'uno'},
	}).done(function(data) {
		//alert(JSON.stringify(data));
		$('#uno').html(JSON.stringify(data));
		console.log("success");

	})
	.fail(function() {
		console.log("error");
	})
	.always(function(data) {
		console.log("complete");
	});

		$.ajax({
		url: 'ajax.php',
		type: 'post',
		dataType: 'json',
		data: {'funcion':'dos'},
	}).done(function(data) {
		//alert(JSON.stringify(data[1].nombre));
		$('#dos').html(JSON.stringify(data));
		console.log("success");

	})
	.fail(function() {
		console.log("error");
	})
	.always(function(data) {
		console.log("complete");
	});
   

});