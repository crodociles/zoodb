<?php
	echo "<head><title>";
	echo $zPZooName;
	echo " | ZooDB </title></head>";
	include 'page-head.html';
	include 'dbcon.php';

	echo "<div class='zoo-page-head'><h1>";
	echo $zPZooName;
	echo "</h1></div><!-- /zoo-page-head --><button type='button' class='btn btn-lg species-btn' data-toggle='modal' data-target='#myModal'>See full species List</button><div class='zoo-logo-img-wrapper'><img class='zoo-logo-img' src='assets/img/zoo-logos/";
	echo $zPImgPath;
	echo "'></div>	<!-- /zoo-logo-img-wrapper --><div class='row'><div class='col-md-6'><ul class='zoo-facts-list'><li class='zoo-facts-list-item'><b><u>FACTS:</u></b></li><li class='zoo-facts-list-item'><b>Opened: </b>";
	echo $zPFactOpened;
	echo "</li><li class='zoo-facts-list-item'><b>Size: </b>";
	echo $zPFactSize;
	echo "</li><li class='zoo-facts-list-item'><b>Number of species: </b>";
	echo $zPFactSpecies;
	echo "</li></ul></div><div class='col-md-6'><ul class='zoo-facts-list'>	<li class='zoo-links-list-item soc-med-icon'><a href='";
	echo $zPFbPath;
	echo "'><i class='fa fa-2x fa-facebook-official' aria-hidden='true'></i></a></li><li class='zoo-links-list-item soc-med-icon'><a href='";
	echo $zPTwitterPath;
	echo "''><i class='fa fa-2x fa-twitter-square' aria-hidden='true'></i></a></li><li class='zoo-links-list-item soc-med-icon'><a href='";
	echo $zPInstaPath;
	echo "''><i class='fa fa-2x fa-instagram' aria-hidden='true'></i></a></li><li class='zoo-links-list-item off-site'><a href='";
	echo $zPOffWebPath;
	echo "'>Official site <i class='fa fa-1x fa-external-link' aria-hidden='true'></i></a></li></ul></div></div><div class='row'><iframe class='map' src='";
	echo $zPMapPath;
	echo "' frameborder='0' style='border:1;border-width:3px;border-color:#333;border-style:inset;'' allowfullscreen></iframe>
			<!-- Modal --><div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'><div class='modal-dialog' role='document'><div class='modal-content'><div class='modal-header'><script type='text/javascript' src='assets/js/jquery.min.js'></script><button type='button' class='close' data-dismiss='modal' aria-label='Close'><i class='fa fa-times fa-2x' aria-hidden='true'></i></button>Full species list</div><div class='modal-body'><div id='species-table-wrapper'><table class='species-table table-condensed'><thead></thead>";

		$result = $con->query('SELECT * FROM ' . $zPDbPath . ' ORDER BY animal_name ASC');

		if ($result->num_rows > 0) {
			echo '<tr>';
			 	while($row = $result->fetch_assoc()) {
        			echo "<tr><td> " . $row["animal_name"]. " <br> <span class='species-table-taxname'>" . $row["animal_taxon"]. "</span></td>";
    			}
			echo '</tr>';
		};

	echo "</table></div> <!-- /species-table-wrapper --></div></div></div></div></div> <!-- /row -->";
	include 'page-foot.html'
?>