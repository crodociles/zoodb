<head><title>ZooDB</title></head>
<?php
include 'page-head.html'
?>

<div class="contact-head">

	<h1>Site map</h1>

</div> <!-- /contact-head -->
<ul class="sitemap-ul">
	<li><a href="index">Index</a></li>
	<li><a href="zoo-list">Zoos</a></li>
		<?php
			include 'dbcon.php';

			$siteMapQueryStr 	= 'SELECT * FROM zoo_table ORDER BY zoo_name ASC';
			$siteMapQuery		= $con->query($siteMapQueryStr) or die ("Could not search for zoos!");
			$siteMapCount		= mysqli_num_rows($siteMapQuery);
			$siteMapOutput		= "";
			if($siteMapCount !== 0){		
				while($row = mysqli_fetch_array($siteMapQuery)){
					$siteMapResult = $row['zoo_name'];
					$siteMapArr = strtolower($siteMapResult);
					$siteMapArr = explode(" ",$siteMapArr);
					$siteMapArr = implode("-",$siteMapArr);
					$siteMapOutput .= "<li><a href='".$siteMapArr."'>".$siteMapResult."</a></li>";
				};
			};
			echo "<ul>".$siteMapOutput."</ul>";
		?>
	<li><a href="ukzoomap">UK Zoo Map</a></li>
	<li><a href="contact">Contact</a></li>
	<li><a href="links">Links</a></li>
	<li><a href="disclaimer">Disclaimer</a></li>
</ul>
<?php
include 'page-foot.html'
?>