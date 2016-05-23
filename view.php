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
				
				<?php while(list($id,$prody)=mysqli_fetch_row($view)){
				?>
				<tbody id="table-data">
					
				<tr >
					<td><?= $no++ ;?></td>
					<td  ><?= $prody ;?></td>
					<td></td>
				</tr>
				</tbody>

				<?php } ?>
			</table>
			
			