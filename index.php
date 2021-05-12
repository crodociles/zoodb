<?php
echo "<head><title>UK zoo database | ZooDB</title><head>";
include 'page-head.html';

?>

<form action="search" method="GET" class="index-form">

	<div class="search-text">

		Search

	</div> <!-- /search-text -->


	<div class="form-group search-wrapper">

		<div class="input-group">
			
			<input name="search" class="form-control search-input" id="search-input" type="text" placeholder="Enter an animal..." autocomplete="off" required>
			
			<span class="search-addon mob-hidden">
			
				<select name="name-type">

					<option selected class="select-ele" value="common-name">Common name</option>
			
					<option class="select-ele" value="taxonomic-name">Scientific name</option>
			
				</select>
			
			</span>
		
		</div>

		<button class="search-btn" type="submit">Search</button>

	</div> <!-- /search-wrapper -->

</form>

<?php
include 'page-foot.html'
?>