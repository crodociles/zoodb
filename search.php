<head><title>Results for <?php echo $_GET['search'];?> | ZooDB</title></head>

<?php
include 'dbcon.php';
include 'phpSearch.php';
include 'page-head.html';
include 'search-modifier.php';

$fullCount = 	$lonCount + 
				$whipCount + 
				$camperdownCount +
				$cotwCount +
				$drusillaCount + 
				$exmoorCount +
				$kirkleyCount +
				$blackpoolCount + 
				$newforestCount +
				$scotdeerCount + 				
				$bristolCount +
				$woburnCount +				
				$paradiseCount +
				$wildplaceCount +
				$yorkshireCount +
				$banhamCount +
				$woburnCount +
				$colchesterCount +
				$twycrossCount +
				$amazonworldCount +
				$dublinCount +
				$newquayCount +
				$flamingolandCount +
				$dudleyCount +
				$draytonCount +
				$edinburghCount +
				$marwellCount +
				$paigntonCount +
				$dartmoorCount +
				$durrellCount +
				$fivesisCount +
				$follyCount +
				$blairDCount +
				$batterseaCount +
				$chestnutCount +
				$fotaCount +
				$gauntletCount +
				$lakedistrictCount +
				$raptorCount +
				$secretValleyCount +
				$taytoCount +
				$lintonCount +
				$mablethorpeCount +
				$westmidCount +
				$iowCount +
				$lakeOasisCount +
				$woodsideCount +
				$lincswpCount +
				$cotswoldCount + 
				$bealeparkCount +
				$combeMartinCount +
				$harewoodCount +
				$tropiquariaCount +
				$thrigbyCount +
				$wolfconCount +
				$chessingtonCount +
				$peakWildlifeCount +
				$manorHouseCount +
				$welshMountainCount +
				$highlandCount +
				$noahsarkCount +
				$birdlandCount +
				$knowsleyCount +
				$southlakesCount +
				$monkeyWorldCount +
				$hamertonCount +
				$chesterCount +
				$arkWildlifeCount +
				$jimmysFarmCount +
				$belfastCount;
?>

<div id="found-num">

	<br>Found 	<?php echo $fullCount;?> results that contain "<?php echo $search?>" in the UK<br>

</div> <!-- /found-num -->

<form action="search" method="GET" class="search-page-form">

	<div class="form-group search-wrapper">

		<div class="input-group">
			
			<input name="search" class="form-control search-input" id="search-input" value="<?php echo $search ?>" type="text" placeholder="Enter an animal..." autocomplete="off" required>
						
			<span class="search-addon mob-hidden">
			
				<select name="name-type">

					<option selected class="select-ele" value="common-name">Common name</option>
			
					<option class="select-ele" value="taxonomic-name">Scientific Name</option>
			
					<!--<option class="select-ele"  value="zoo-name">Zoo</option>-->
			
				</select>
			
			</span>
		
		</div>
		
		<button class="search-btn" type="submit">Search</button>

	</div> <!-- /search-wrapper -->

</form>

<!--
<div id="result-type-switch">Show results as map</div>

<div id="map-wrapper" class="hidden">

	<div id="map-canvas" style="width:100%;height:100%"></div>

</div>
-->
<div id="search-result-wrapper">

	<div class="results-wrapper">

		<?php
			
			if($fullCount > 500){

				echo "Over 500 results found. ";

			} elseif($fullCount == 0) {
				echo "Sorry no results were found.";
			} else{	
				if($africaaliveCount !== 0){
					echo "<div class='zoo-result-title'><a href='africa-alive'><h1>Africa Alive</h1></a></div>";
					echo $africaaliveOutput;
				}	
				if($amazonworldCount !== 0){
					echo "<div class='zoo-result-title'><a href='amazon-world'><h1>Amazon World Zoo Park</h1></a></div>";
					echo $amazonworldOutput;
				}	
				if($arkWildlifeCount !== 0){
					echo "<div class='zoo-result-title'><a href='ark-wildlife-park'><h1>Ark Wildlife Park</h1></a></div>";
					echo $arkWildlifeOutput;
				}	
				if($banhamCount !== 0){
					echo "<div class='zoo-result-title'><a href='banham-zoo'><h1>Banham Zoo</h1></a></div>";
					echo $banhamOutput;
				}	
				if($batterseaCount !== 0){
					echo "<div class='zoo-result-title'><a href='battersea-park-childrens-zoo'><h1>Battersea Park Children's Zoo</h1></a></div>";
					echo $batterseaOutput;
				}	
				if($bealeparkCount !== 0){
					echo "<div class='zoo-result-title'><a href='beale-park'><h1>Beale Park</h1></a></div>";
					echo $bealeparkOutput;
				}	
				if($belfastCount !== 0){
					echo "<div class='zoo-result-title'><a href='belfast-zoo'><h1>Belfast Zoo</h1></a></div>";
					echo $belfastOutput;
				}	
				if($birdlandCount !== 0){
					echo "<div class='zoo-result-title'><a href='birdland'><h1>Birdland</h1></a></div>";
					echo $birdlandOutput;
				}	
				if($blackpoolCount !== 0){
					echo "<div class='zoo-result-title'><a href='blackpool-zoo'><h1>Blackpool Zoo</h1></a></div>";
					echo $blackpoolOutput;
				}
				if($blairDCount !== 0){
					echo "<div class='zoo-result-title'><a href='blair-drummond-safari-park'><h1>Blair Drummond Safari Park</h1></a></div>";
					echo $blairDOutput;
				}
				if($bristolCount !== 0){
					echo "<div class='zoo-result-title'><a href='bristol-zoo'><h1>Bristol Zoo</h1></a></div>";
					echo $bristolOutput;
				}
				if($camperdownCount !== 0){
					echo "<div class='zoo-result-title'><a href='camperdown-wildlife-centre'><h1>Camperdown Wildlife Centre</h1></a></div>";
					echo $camperdownOutput;
				}
				if($chesterCount !== 0){
					echo "<div class='zoo-result-title'><a href='chester-zoo'><h1>Chester Zoo</h1></a></div>";
					echo $chesterOutput;
				}	
				if($chessingtonCount !== 0){
					echo "<div class='zoo-result-title'><a href='chessington-zoo'><h1>Chessington Zoo</h1></a></div>";
					echo $chessingtonOutput;
				}
				if($chestnutCount !== 0){
					echo "<div class='zoo-result-title'><a href='chestnut-centre'><h1>Chestnut Centre</h1></a></div>";
					echo $chestnutOutput;
				}
				if($colchesterCount !== 0){
					echo "<div class='zoo-result-title'><a href='colchester-zoo'><h1>Colchester Zoo</h1></a></div>";
					echo $colchesterOutput;
				}	
				if($combeMartinCount !== 0){
					echo "<div class='zoo-result-title'><a href='combe-martin-park'><h1>Combe Martin Park</h1></a></div>";
					echo $combeMartinOutput;
				}	
				if($cotswoldCount !== 0){
					echo "<div class='zoo-result-title'><a href='cotswold-wildlife-park'><h1>Cotswold Wildlife Park</h1></a></div>";
					echo $cotswoldOutput;
				}	
				if($cotwCount !== 0){
					echo "<div class='zoo-result-title'><a href='crocodiles-of-the-world'><h1>Crocodiles of the World</h1></a></div>";
					echo $cotwOutput;
				}	
				if($dartmoorCount !== 0){
					echo "<div class='zoo-result-title'><a href='dartmoor-zoo'><h1>Dartmoor Zoo</h1></a></div>";
					echo $dartmoorOutput;
				}	
				if($drusillaCount !== 0){
					echo "<div class='zoo-result-title'><a href='drusillas-park'><h1>Drusilla's Park</h1></a></div>";
					echo $drusillaOutput;
				}
				if($dublinCount !== 0){
					echo "<div class='zoo-result-title'><a href='dublin-park'><h1>Dublin Zoo</h1></a></div>";
					echo $dublinOutput;
				}
				if($draytonCount !== 0){
					echo "<div class='zoo-result-title'><a href='drayton-manor'><h1>Drayton Manor Theme Park</h1></a></div>";
					echo $draytonOutput;
				}
				if($dudleyCount !== 0){
					echo "<div class='zoo-result-title'><a href='dudley-zoo'><h1>Dudley Zoo</h1></a></div>";
					echo $dudleyOutput;
				}
				if($durrellCount !== 0){
					echo "<div class='zoo-result-title'><a href='durrell-wildlife-park'><h1>Durrell Wildlife Park</h1></a></div>";
					echo $durrellOutput;
				}
				if($edinburghCount !== 0){
					echo "<div class='zoo-result-title'><a href='edinburgh-zoo'><h1>Edinburgh Zoo</h1></a></div>";
					echo $edinburghOutput;
				}
				if($exmoorCount !== 0){
					echo "<div class='zoo-result-title'><a href='exmoor-zoo'><h1>Exmoor Zoo</h1></a></div>";
					echo $exmoorOutput;
				}
				if($fivesisCount !== 0){
					echo "<div class='zoo-result-title'><a href='five-sisters-zoo'><h1>Five Sisters Zoo</h1></a></div>";
					echo $fivesisOutput;
				}
				if($flamingolandCount !== 0){
					echo "<div class='zoo-result-title'><a href='flamingo-land'><h1>Flamingo Land</h1></a></div>";
					echo $flamingolandOutput;
				}
				if($follyCount !== 0){
					echo "<div class='zoo-result-title'><a href='folly-farm-zoo'><h1>Folly Farm Zoo</h1></a></div>";
					echo $follyOutput;
				}
				if($fotaCount !== 0){
					echo "<div class='zoo-result-title'><a href='fota-wildlife-park'><h1>Fota Wildlife Park</h1></a></div>";
					echo $fotaOutput;
				}
				if($highlandCount !== 0){
					echo "<div class='zoo-result-title'><a href='highland-wildlife-park'><h1>Highland Wildlife Park</h1></a></div>";
					echo $highlandOutput;
				}
				if($gauntletCount !== 0){
					echo "<div class='zoo-result-title'><a href='gauntlet-birds-of-prey'><h1>Gauntlet Birds of Prey</h1></a></div>";
					echo $gauntletOutput;
				}
				if($hamertonCount !== 0){
					echo "<div class='zoo-result-title'><a href='hamerton-zoo-park'><h1>Hamerton Zoo Park</h1></a></div>";
					echo $hamertonOutput;
				}
				if($harewoodCount !== 0){
					echo "<div class='zoo-result-title'><a href='harewood-bird-garden'><h1>Harewood Bird Garden</h1></a></div>";
					echo $harewoodOutput;
				}
				if($iowCount !== 0){
					echo "<div class='zoo-result-title'><a href='isle-of-wight-zoo'><h1>Isle of Wight Zoo</h1></a></div>";
					echo $iowOutput;
				}
				if($jimmysFarmCount !== 0){
					echo "<div class='zoo-result-title'><a href='jimmys-farm'><h1>Jimmy's Farm</h1></a></div>";
					echo $jimmysFarmOutput;
				}
				if($kirkleyCount !== 0){
					echo "<div class='zoo-result-title'><a href='kirkley-hall-zoo'><h1>Kirkley Hall Zoo</h1></a></div>";
					echo $kirkleyOutput;
				}
				if($knowsleyCount !== 0){
					echo "<div class='zoo-result-title'><a href='knowsley-safari-park'><h1>Knowsley Safari Park</h1></a></div>";
					echo $knowsleyOutput;
				}
				if($lakeOasisCount !== 0){
					echo "<div class='zoo-result-title'><a href='lakeland-wildlife-oasis'><h1>Lakeland Wildlife Oasis</h1></a></div>";
					echo $lakeOasisOutput;
				}
				if($lakedistrictCount !== 0){
					echo "<div class='zoo-result-title'><a href='lake-district-wildlife-park'><h1>Lake District Wildlife Park</h1></a></div>";
					echo $lakedistrictOutput;
				}
				if($lincswpCount !== 0){
					echo "<div class='zoo-result-title'><a href='lincolnshire-wildlife-park'><h1>Lincolnshire Wildlife Park</h1></a></div>";
					echo $lincswpOutput;
				}
				if($lintonCount !== 0){
					echo "<div class='zoo-result-title'><a href='linton-zoo'><h1>Linton Zoo</h1></a></div>";
					echo $lintonOutput;
				}
				if($lonCount !== 0){
					echo "<div class='zoo-result-title'><a href='london-zoo'><h1>London Zoo</h1></a></div>";
					echo $lonOutput;
				}
				if($mablethorpeCount !== 0){
					echo "<div class='zoo-result-title'><a href='mablethorpe-seal-sanctuary'><h1>Mablethorpe Seal Sanctuary</h1></a></div>";
					echo $mablethorpeOutput;
				}
				if($manorHouseCount !== 0){
					echo "<div class='zoo-result-title'><a href='manor-house'><h1>Manor House Wildlife Park</h1></a></div>";
					echo $manorHouseOutput;
				}
				if($marwellCount !== 0){
					echo "<div class='zoo-result-title'><a href='marwell-zoo'><h1>Marwell Zoo</h1></a></div>";
					echo $marwellOutput;
				}
				if($monkeyWorldCount !== 0){
					echo "<div class='zoo-result-title'><a href='monkey-world-ape-rescue-centre'><h1>Monkey World Ape Rescue Centre</h1></a></div>";
					echo $monkeyWorldOutput;
				}
				if($newforestCount !== 0){
					echo "<div class='zoo-result-title'><a href='new-forest-wildlife-park'><h1>New Forest Wildlife Park</h1></a></div>";
					echo $newforestOutput;
				}
				if($newquayCount !== 0){
					echo "<div class='zoo-result-title'><a href='newquay-zoo'><h1>Newquay Zoo</h1></a></div>";
					echo $newquayOutput;
				}
				if($noahsarkCount !== 0){
					echo "<div class='zoo-result-title'><a href='noahs-ark-zoo-farm'><h1>Noah's Ark Zoo Farm</h1></a></div>";
					echo $noahsarkOutput;
				}
				if($paigntonCount !== 0){
					echo "<div class='zoo-result-title'><a href='paignton-zoo'><h1>Paignton Zoo</h1></a></div>";
					echo $paigntonOutput;
				}
				if($paradiseCount !== 0){
					echo "<div class='zoo-result-title'><a href='paradise-wildlife-park'><h1>Paradise Wildlife Park</h1></a></div>";
					echo $paradiseOutput;
				}
				if($peakWildlifeCount !== 0){
					echo "<div class='zoo-result-title'><a href='peak-wildlife-park'><h1>Peak Wildlife Park</h1></a></div>";
					echo $peakWildlifeOutput;
				}
				if($raptorCount !== 0){
					echo "<div class='zoo-result-title'><a href='the-raptor-foundation'><h1>The Raptor Foundation</h1></a></div>";
					echo $raptorOutput;
				}
				if($scotdeerCount !== 0){
					echo "<div class='zoo-result-title'><a href='scottish-deer-centre'><h1>Scottish Deer Centre</h1></a></div>";
					echo $scotdeerOutput;
				}	
				if($secretValleyCount !== 0){
					echo "<div class='zoo-result-title'><a href='secret-valley-wildlife-park'><h1>Secret Valley Wildlife Park</h1></a></div>";
					echo $secretValleyOutput;
				}		
				if($southlakesCount !== 0){
					echo "<div class='zoo-result-title'><a href='south-lakes-safari-zoo'><h1>South Lakes Safari Zoo</h1></a></div>";
					echo $southlakesOutput;
				}	
				if($taytoCount !== 0){
					echo "<div class='zoo-result-title'><a href='tayto-park'><h1>Tayto Park</h1></a></div>";
					echo $taytoOutput;
				}	
				if($thrigbyCount !== 0){
					echo "<div class='zoo-result-title'><a href='thrigby-hall-wildlife-gardens'><h1>Thrigby Hall Wildlife Gardens</h1></a></div>";
					echo $thrigbyOutput;
				}	
				if($tropiquariaCount !== 0){
					echo "<div class='zoo-result-title'><a href='tropiquaria'><h1>Tropiquaria</h1></a></div>";
					echo $tropiquariaOutput;
				}	
				if($twycrossCount !== 0){
					echo "<div class='zoo-result-title'><a href='twycross-zoo'><h1>Twycross Zoo</h1></a></div>";
					echo $twycrossOutput;
				}	
				if($welshMountainCount !== 0){
					echo "<div class='zoo-result-title'><a href='welsh-mountain-zoo'><h1>Welsh Mountain Zoo</h1></a></div>";
					echo $welshMountainOutput;
				}	
				if($westmidCount !== 0){
					echo "<div class='zoo-result-title'><a href='west-midland-safari-park'><h1>West Midland Safari Park</h1></a></div>";
					echo $westmidOutput;
				}	
				if($woburnCount !== 0){
					echo "<div class='zoo-result-title'><a href='woburn-safari-park'><h1>Woburn Safari Park</h1></a></div>";
					echo $woburnOutput;
				}
				if($whipCount !== 0){
					echo "<div class='zoo-result-title'><a href='whipsnade-zoo'><h1>Whipsnade Zoo</h1></a></div>";
					echo $whipOutput;
				}	
				if($wildplaceCount !== 0){
					echo "<div class='zoo-result-title'><a href='wild-place-project'><h1>Wild Place Project</h1></a></div>";
					echo $wildplaceOutput;
				}	
				if($wolfconCount !== 0){
					echo "<div class='zoo-result-title'><a href='wolf-conservation-trust'><h1>Wolf Conservation Trust</h1></a></div>";
					echo $wolfconOutput;
					echo "<script>var wolfConMarker = new google.maps.Marker({position:{lat:51.420185,lng:-1.152492},map:map,text:'Wolf Convservation Trust'});</script>";
				}	
				if($woodsideCount !== 0){
					echo "<div class='zoo-result-title'><a href='woodside-wildlife-park'><h1>Woodside Wildlife Park</h1></a></div>";
					echo $woodsideOutput;
				}	
				if($yorkshireCount !== 0){
					echo "<div class='zoo-result-title'><a href='yorkshire-wildlife-centre'><h1>Yorkshire Wildlife Park</h1></a></div>";
					echo $yorkshireOutput;
				}
			}
		
		?>

	</div> <!-- /results-wrapper -->
	
	<div class="alt-search">

		<?php

			include 'names.php';

			$altResults = "";

			echo "<br><br>";
			
			//Search names.php for alternate animal names
			for($x=0;$x<sizeof($names);$x++){
				
				for($y=0;$y<sizeof($names[$x]);$y++){
				
					$result=[];
				
					if($names[$x][$y]==$search){
				
						$result = $names[$x];
				
						echo "Didn't find what you wanted?<br>Some zoo's have different names for the same animal.<br>Alternate names for ".$search." inlcude:<br>";
				
						for($a=0;$a<sizeof($result);$a++){
				
							if ($search == $result[$a]){
				
							}
				
							if ($search != $result[$a]){
				
								$resultArr = explode(" ",$result[$a]);

								$resultArr = implode("+",$resultArr);
				
								echo "<span class='alt-text'>";
				
								echo "<a href='search?search=" . $resultArr . "&name-type=common-name'>" .$result[$a]. "</a></span><br>";
				
							}
				
						}
				
					}

				}
				
			};

		?>

	</div> <!-- /alt-search -->

</div> <!-- /search-result-wrapper -->

<?php

	include 'page-foot.html'

?>

<!--<script async defer	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqzx6QzY0IYWWS-OjjNTnvTypSCw1my_c&callback=initMap">
</script>
-->