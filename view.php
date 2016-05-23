		<br>
		<?php
			include "con.php";
			$no=1;
			$view = mysqli_query($con,"SELECT id,name FROM prody");


		?>
			
			<table border=1 width="400">
				<thead>
					<tr style="text-align:center;">
					<td>no</td>
					<td>name</td>
					<td>Action</td>
				</tr>

				</thead>
				
				<tbody id="table-data">

				<?php while(list($id,$prody)=mysqli_fetch_row($view)){
				?>
					
				<tr >
					<td><?= $no++ ;?></td>
					<td  ><?= $prody ;?></td>
					<td><button type="button" class="btn-delete" data-id='<?=$id?>' onclick="return confirm('Delete ?');">Delete</button></td>
				</tr>

				<?php } ?>
				</tbody>

			</table>
			
			