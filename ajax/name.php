
	<table class="table table-striped">
		<thead>
			<tr>
				<th class="text-center">No.</th>
				<th class="text-center">Name</th>
				<th class="text-center">Ingredient</th>
				<th class="text-center">Food Description</th>
				
			</tr>
		</thead>
								
		<tbody>	
			<?php
			error_reporting(0);
			if ($_REQUEST['submit']) {
			$search_file = $_POST['search_file'];
			$sql = mysql_query("select * from dish where name like '%$search_file%' Order by name ASC") or die('Error in query : $sql. ' .mysql_error());
			
			if (empty($search_file)) {
			echo '<script language="javascript">';
			echo 'alert("Text field cannot be empty. Please Try it again.")';
			echo '</script>';
			header( "refresh:2; url=home.php" ); 
			}
			else if (mysql_num_rows($sql) > 0) 
			{            
			$i = 1;
			while ($row = mysql_fetch_array($sql)) {
							// Print out the contents of the entry 
			echo '<tr>';
			echo '<td class="text-center">' . $i . '</td>';
			echo '<td class="text-center">' . $row['name'] . '</td>';
			echo '<td class="text-center">' . $row['ing'] . '</td>';
			echo '<td class="text-center">' . $row['desc_name'] . '</td>';
			$i++;
			}
			} 
			else 
			{
			echo '<div class="alert alert-danger" style="width:130px; float:right; margin-top:-142px;">No Results Found!!!</div>';
			}
			}
			?>       
		</tbody>
	</table>
</div>