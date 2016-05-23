<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud with ajax</title>
	<script src="js/jquery-2.2.4.min.js"></script>
</head>
<body>
	
	<h1>Simple Crud with ajax</h1>

	<input type="text" id="isi_prody" name="isi_prody" required>

	<input type="submit" id="btn_save" value="save">

	<div id="data_prody">
		

	</div>

	<script>
			$("#btn_save").on('click',function(){
				//console.log($("#isi_prody").val());
				var name_prody = $("#isi_prody").val();
				$.ajax({
					type:"POST",
					url:"prody_proses.php",
					data:{name : name_prody},
					success : function(data){
						console.log(data);
					}
				});
			});

	</script>
</body>
</html>