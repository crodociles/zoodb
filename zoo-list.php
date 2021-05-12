<?php 

echo "<head><title>Full Zoo List | ZooDB</title></head>";
include 'page-head.html';
include 'dbcon.php';

$result = $con->query('SELECT * FROM zoo_table ORDER BY zoo_name ASC');

?>

<div id="zoo-list-table-wrapper">

	<table id="zoo-list-table" class="table table-condensed">

		<thead>
			
			<th class="zoo-list-head">Zoos in database</th>

			<th class="zoo-list-head">Species</th>
			

		</thead>

		<tbody>
			
		<?php

			if ($result->num_rows > 0) {
				$totalCount = 0;
				echo '<tr>';
				 	while($row = $result->fetch_assoc()) {
				 		$linkPath = strtolower($row['zoo_name']);
				 		$linkPath = str_replace("'", "", $linkPath);
				 		$linkPath = preg_replace('/[\s]/', '-', $linkPath);
				 		
	        			echo "<tr><td><a class='zoo-list-link' href='". $linkPath ."'>". $row["zoo_name"]. " </a></td><td> " . $row["species_num"]. "</td></tr>";

	        			$totalCount +=  $row["species_num"];
	    			}
				echo '</tr>';
			};

		?>


		</tbody>

	</table>

</div> <!-- /zoo-list-table -->
