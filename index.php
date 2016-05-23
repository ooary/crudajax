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

			<?php include("view.php");?>


	</div>

	<script>
	$(document).ready(function(){
			$("#btn_save").on('click',function(){
				//console.log($("#isi_prody").val());
				var name_prody = $("#isi_prody").val();
				$.ajax({
					method:"POST",
					url:"prody_proses.php",
					data:{name : name_prody , type :"insert"},
					success : function(data){
						$("#data_prody").load("view.php");
						$("#isi_prody").val("");

					}
				});
			});

			$(document).on('click','.btn-delete',function(){
				var id = $(this).attr('data-id');
				//test ambil id
				//console.log($(this).attr('data-id'));
				$.ajax({
					method:"POST",
					url:"prody_proses.php",
					data:{ id_prody : id , type : "delete"},
					success : function(data){

						if(data == 1 ){
							$("#prody_"+id).fadeOut();

						}
						else if(data == 0)
						{
							alert("gagal delete");
						}

					}
				});
			});



	});
			
	</script>
</body>
</html>