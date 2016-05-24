<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud with ajax</title>
	<script src="js/jquery-2.2.4.min.js"></script>
</head>
<body>
	
	<h1>Simple Crud with ajax</h1>
	<div id="form-input">
		<input type="text" class="edit_prody" id="isi_prody" name="isi_prody" required>
	
	    <input type="submit" id="btn_save" value="save">

	</div>
	

	<div id="data_prody">

			<?php include("view.php");?>


	</div>

	<script>
	$(document).ready(function(){
			
		//insert data with ajax
		$(document).on('click',"#btn_save",function(){
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
	//delete data with ajax
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
	//get data into form with click and ajax
	$(document).on('click','.isi_data',function(){
 		var id = $(this).attr('data-id');
		//var isi_prody = $(this).text();

		if($(".edit_prody").val($(this).text())){
			$("#btn_save").val("edit").attr({
											"class":"btn-edit",
											"data-id":id,
											"id":"btn-edit",

			});
		}
	});

	// update data with ajax

	$(document).on('click','.btn-edit',function(){
		var id = $(this).attr('data-id');
		var isi = $(".edit_prody").val();
		var newTd= $(document.createElement('td')).attr({
														   "class":"isi_data",
														   "data-id":id,		  
														   "id":"prodyId_"+id,
														}).text(isi);
		$.ajax({
					method:"POST",
					url:"prody_proses.php",
					data:{ id_prody : id , type : "update" , isi_prody : isi},
					success : function(data){

						if(data == 1 ){
							$("#prodyId_"+id).replaceWith(newTd);
							$("#isi_prody").val("");
							$("#btn-edit").val("save").attr({
											"class":"btn_save",
											"id":"btn_save",
											});
						}
						else if(data == 0)
						{
							alert("gagal update");
						}

					}
				});
	});

	

	});
			
	</script>
</body>
</html>