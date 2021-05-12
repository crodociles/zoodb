<?php

include 'dbcon.php';

//Query the database
if(isset($_GET['search'])){

	include 'search-queries.php';

	//Call query

	$africaaliveQuery 		= $con->query($africaaliveQueryStr) 	or die ("Could not search africaalive!");
	$amazonworldQuery 		= $con->query($amazonworldQueryStr) 	or die ("Could not search amazonworld!");
	$arkWildlifeQuery 		= $con->query($arkWildlifeQueryStr) 	or die ("Could not search arkWildlife!");
	$banhamQuery 			= $con->query($banhamQueryStr) 			or die ("Could not search banham!");
	$batterseaQuery 		= $con->query($batterseaQueryStr)		or die ("Could not search battersea!");
	$bealeparkQuery 		= $con->query($bealeparkQueryStr)		or die ("Could not search beale!");
	$belfastQuery 			= $con->query($belfastQueryStr)			or die ("Could not search belfast!");
	$birdlandQuery 			= $con->query($birdlandQueryStr)		or die ("Could not search birdland!");
	$blackpoolQuery 		= $con->query($blackpoolQueryStr) 		or die ("Could not search blackpool!");
	$blairDQuery 			= $con->query($blairDQueryStr)			or die ("Could not search blairD!");
	$bristolQuery 			= $con->query($bristolQueryStr) 		or die ("Could not search bristol!");
	$camperdownQuery 		= $con->query($camperdownQueryStr) 		or die ("Could not search camperdown!");
	$chessingtonQuery 		= $con->query($chessingtonQueryStr)		or die ("Could not search chessington!");
	$chesterQuery 			= $con->query($chesterQueryStr)			or die ("Could not search chester!");
	$chestnutQuery 			= $con->query($chestnutQueryStr)		or die ("Could not search chestnut!");
	$colchesterQuery 		= $con->query($colchesterQueryStr) 		or die ("Could not search colchester!");
	$combeMartinQuery 		= $con->query($combeMartinQueryStr)		or die ("Could not search combemartin!");
	$cotswoldQuery 			= $con->query($cotswoldQueryStr)		or die ("Could not search cotswold!");
	$cotwQuery 				= $con->query($cotwQueryStr) 			or die ("Could not search cotw!");
	$dartmoorQuery 			= $con->query($dartmoorQueryStr)		or die ("Could not search dartmoor!");
	$draytonQuery 			= $con->query($draytonQueryStr)			or die ("Could not search drayton!");
	$drusillaQuery 			= $con->query($drusillaQueryStr) 		or die ("Could not search drusillas!");
	$dublinQuery 			= $con->query($dublinQueryStr) 			or die ("Could not search dublin!");
	$dudleyQuery 			= $con->query($dudleyQueryStr) 			or die ("Could not search dudley!");
	$durrellQuery 			= $con->query($durrellQueryStr)			or die ("Could not search durrell!");
	$edinburghQuery 		= $con->query($edinburghQueryStr)		or die ("Could not search edinburgh!");
	$exmoorQuery 			= $con->query($exmoorQueryStr) 			or die ("Could not search exmoor!");
	$fivesisQuery 			= $con->query($fivesisQueryStr)			or die ("Could not search fivesis!");
	$flamingolandQuery 		= $con->query($flamingolandQueryStr) 	or die ("Could not search flamingo!");
	$follyQuery 			= $con->query($follyQueryStr)			or die ("Could not search folly!");
	$fotaQuery 				= $con->query($fotaQueryStr)			or die ("Could not search fota!");
	$gauntletQuery 			= $con->query($gauntletQueryStr)		or die ("Could not search gauntlet!");
	$hamertonQuery 			= $con->query($hamertonQueryStr)		or die ("Could not search hamerton!");
	$harewoodQuery 			= $con->query($harewoodQueryStr)		or die ("Could not search harewood!");
	$highlandQuery 			= $con->query($highlandQueryStr)		or die ("Could not search highland!");
	$iowQuery 				= $con->query($iowQueryStr)				or die ("Could not search iow!");
	$jimmysFarmQuery 		= $con->query($jimmysFarmQueryStr)		or die ("Could not search jimmysFarm!");
	$kirkleyQuery 			= $con->query($kirkleyQueryStr) 		or die ("Could not search kirkley!");
	$knowsleyQuery 			= $con->query($knowsleyQueryStr)		or die ("Could not search knowsley!");
	$lakedistrictQuery 		= $con->query($lakedistrictQueryStr)	or die ("Could not search lakedistrict!");
	$lakeOasisQuery 		= $con->query($lakeOasisQueryStr)		or die ("Could not search lakeoasis!");
	$lincswpQuery 			= $con->query($lincswpQueryStr)			or die ("Could not search lincswp!");
	$lintonQuery 			= $con->query($lintonQueryStr)			or die ("Could not search linton!");
	$lonQuery 				= $con->query($lonQueryStr) 			or die ("Could not search london!");
	$mablethorpeQuery 		= $con->query($mablethorpeQueryStr)		or die ("Could not search mablethorpe!");
	$manorHouseQuery 		= $con->query($manorHouseQueryStr)		or die ("Could not search manorhouse!");
	$marwellQuery 			= $con->query($marwellQueryStr)			or die ("Could not search marwell!");
	$monkeyWorldQuery 		= $con->query($monkeyWorldQueryStr)		or die ("Could not search monkeyWorld!");
	$newforestQuery 		= $con->query($newforestQueryStr) 		or die ("Could not search new forest!");
	$newquayQuery 			= $con->query($newquayQueryStr) 		or die ("Could not search newquay!");
	$noahsarkQuery 			= $con->query($noahsarkQueryStr)		or die ("Could not search noahsark!");
	$paigntonQuery 			= $con->query($paigntonQueryStr)		or die ("Could not search paignton!");
	$paradiseQuery 			= $con->query($paradiseQueryStr) 		or die ("Could not search paradise!");
	$peakWildlifeQuery 		= $con->query($peakWildlifeQueryStr)	or die ("Could not search peakwildlife!");
	$raptorQuery 			= $con->query($raptorQueryStr)			or die ("Could not search raptor!");
	$scotdeerQuery 			= $con->query($scotdeerQueryStr) 		or die ("Could not search scotdeer!");
	$secretValleyQuery 		= $con->query($secretValleyQueryStr)	or die ("Could not search secretvalley!");
	$southlakesQuery 		= $con->query($southlakesQueryStr)		or die ("Could not search southlakes!");
	$taytoQuery 			= $con->query($taytoQueryStr)			or die ("Could not search tayto!");
	$thrigbyQuery 			= $con->query($thrigbyQueryStr)			or die ("Could not search thrigby!");
	$tropiquariaQuery 		= $con->query($tropiquariaQueryStr)		or die ("Could not search tropiquaria!");
	$twycrossQuery 			= $con->query($twycrossQueryStr) 		or die ("Could not search twycross!");
	$welshMountainQuery 	= $con->query($welshMountainQueryStr)	or die ("Could not search welshmountain!");
	$westmidQuery 			= $con->query($westmidQueryStr)			or die ("Could not search westmid!");
	$whipQuery 				= $con->query($whipQueryStr) 			or die ("Could not search Whipsnade!");
	$wildplaceQuery 		= $con->query($wildplaceQueryStr) 		or die ("Could not search widlplace!");
	$woburnQuery 			= $con->query($woburnQueryStr) 			or die ("Could not search woburn!");
	$wolfconQuery 			= $con->query($wolfconQueryStr)			or die ("Could not search wolfcon!");
	$woodsideQuery 			= $con->query($woodsideQueryStr)		or die ("Could not search woodside!");
	$yorkshireQuery 		= $con->query($yorkshireQueryStr) 		or die ("Could not search yorkshire!");

	//Count results
	$africaaliveCount		= mysqli_num_rows($africaaliveQuery);
	$amazonworldCount		= mysqli_num_rows($amazonworldQuery);
	$arkWildlifeCount		= mysqli_num_rows($arkWildlifeQuery);
	$banhamCount			= mysqli_num_rows($banhamQuery);
	$batterseaCount			= mysqli_num_rows($batterseaQuery);
	$bealeparkCount			= mysqli_num_rows($bealeparkQuery);
	$belfastCount 			= mysqli_num_rows($belfastQuery);
	$birdlandCount			= mysqli_num_rows($birdlandQuery);
	$blackpoolCount 		= mysqli_num_rows($blackpoolQuery);
	$blairDCount			= mysqli_num_rows($blairDQuery);
	$bristolCount			= mysqli_num_rows($bristolQuery);
	$camperdownCount		= mysqli_num_rows($camperdownQuery);
	$chestnutCount			= mysqli_num_rows($chestnutQuery);
	$chessingtonCount		= mysqli_num_rows($chessingtonQuery);
	$chesterCount			= mysqli_num_rows($chesterQuery);
	$colchesterCount		= mysqli_num_rows($colchesterQuery);
	$combeMartinCount		= mysqli_num_rows($combeMartinQuery);
	$cotswoldCount			= mysqli_num_rows($cotswoldQuery);
	$cotwCount		 		= mysqli_num_rows($cotwQuery);
	$dartmoorCount			= mysqli_num_rows($dartmoorQuery);
	$dublinCount			= mysqli_num_rows($dublinQuery);
	$dudleyCount			= mysqli_num_rows($dudleyQuery);
	$draytonCount			= mysqli_num_rows($draytonQuery);
	$drusillaCount 			= mysqli_num_rows($drusillaQuery);
	$durrellCount			= mysqli_num_rows($durrellQuery);
	$edinburghCount			= mysqli_num_rows($edinburghQuery);
	$exmoorCount			= mysqli_num_rows($exmoorQuery);
	$fivesisCount			= mysqli_num_rows($fivesisQuery);
	$flamingolandCount		= mysqli_num_rows($flamingolandQuery);
	$follyCount				= mysqli_num_rows($follyQuery);
	$fotaCount				= mysqli_num_rows($fotaQuery);
	$gauntletCount			= mysqli_num_rows($gauntletQuery);
	$hamertonCount			= mysqli_num_rows($hamertonQuery);
	$harewoodCount			= mysqli_num_rows($harewoodQuery);
	$highlandCount			= mysqli_num_rows($highlandQuery);
	$iowCount				= mysqli_num_rows($iowQuery);
	$jimmysFarmCount		= mysqli_num_rows($jimmysFarmQuery);
	$kirkleyCount			= mysqli_num_rows($kirkleyQuery);
	$knowsleyCount			= mysqli_num_rows($knowsleyQuery);
	$lakedistrictCount		= mysqli_num_rows($lakedistrictQuery);
	$lakeOasisCount			= mysqli_num_rows($lakeOasisQuery);
	$lincswpCount			= mysqli_num_rows($lincswpQuery);
	$lintonCount			= mysqli_num_rows($lintonQuery);
	$lonCount 				= mysqli_num_rows($lonQuery);
	$mablethorpeCount		= mysqli_num_rows($mablethorpeQuery);
	$manorHouseCount		= mysqli_num_rows($manorHouseQuery);
	$newforestCount			= mysqli_num_rows($newforestQuery);
	$newquayCount			= mysqli_num_rows($newquayQuery);
	$noahsarkCount			= mysqli_num_rows($noahsarkQuery);
	$marwellCount			= mysqli_num_rows($marwellQuery);
	$monkeyWorldCount		= mysqli_num_rows($monkeyWorldQuery);
	$paigntonCount			= mysqli_num_rows($paigntonQuery);
	$paradiseCount			= mysqli_num_rows($paradiseQuery);
	$peakWildlifeCount		= mysqli_num_rows($peakWildlifeQuery);
	$raptorCount			= mysqli_num_rows($raptorQuery);
	$scotdeerCount	 		= mysqli_num_rows($scotdeerQuery);
	$secretValleyCount		= mysqli_num_rows($secretValleyQuery);
	$southlakesCount		= mysqli_num_rows($southlakesQuery);
	$taytoCount				= mysqli_num_rows($taytoQuery);
	$thrigbyCount			= mysqli_num_rows($thrigbyQuery);
	$tropiquariaCount		= mysqli_num_rows($tropiquariaQuery);
	$twycrossCount			= mysqli_num_rows($twycrossQuery);
	$westmidCount			= mysqli_num_rows($westmidQuery);
	$whipCount 				= mysqli_num_rows($whipQuery);
	$wildplaceCount			= mysqli_num_rows($wildplaceQuery);
	$woburnCount			= mysqli_num_rows($woburnQuery);
	$wolfconCount			= mysqli_num_rows($wolfconQuery);
	$woodsideCount			= mysqli_num_rows($woodsideQuery);
	$yorkshireCount			= mysqli_num_rows($yorkshireQuery);
	$welshMountainCount		= mysqli_num_rows($welshMountainQuery);

	//Declare empty outputs
	$africaaliveOutput		= "";
	$amazonworldOutput		= "";
	$arkWildlifeOutput		= "";
	$banhamOutput			= "";
	$batterseaOutput		= "";
	$bealeparkOutput		= "";
	$belfastOutput			= "";
	$birdlandOutput			= "";
	$blackpoolOutput 		= "";
	$blairDOutput			= "";
	$bristolOutput 			= "";
	$camperdownOutput 		= "";
	$chessingtonOutput		= "";
	$chesterOutput			= "";
	$chestnutOutput			= "";
	$colchesterOutput		= "";
	$combeMartinOutput		= "";
	$cotswoldOutput			= "";
	$cotwOutput			 	= "";
	$dartmoorOutput			= "";
	$draytonOutput			= "";
	$drusillaOutput 		= "";
	$dublinOutput			= "";
	$dudleyOutput			= "";
	$durrellOutput			= "";
	$edinburghOutput		= "";
	$exmoorOutput 			= "";
	$fivesisOutput			= "";
	$flamingolandOutput		= "";
	$follyOutput			= "";
	$fotaOutput				= "";
	$gauntletOutput			= "";
	$hamertonOutput			= "";
	$harewoodOutput			= "";
	$highlandOutput			= "";
	$iowOutput				= "";
	$jimmysFarmOutput		= "";
	$kirkleyOutput 			= "";
	$knowsleyOutput			= "";
	$lakedistrictOutput		= "";
	$lakeOasisOutput		= "";
	$lincswpOutput			= "";
	$lintonOutput			= "";
	$lonOutput 				= "";
	$mablethorpeOutput		= "";
	$manorHouseOutput		= "";
	$marwellOutput			= "";
	$monkeyWorldOutput		= "";
	$newforestOutput 		= "";
	$newquayOutput			= "";
	$noahsarkOutput			= "";
	$paigntonOutput			= "";
	$paradiseOutput			= "";
	$peakWildlifeOutput		= "";
	$raptorOutput			= "";
	$secretValleyOutput		= "";
	$scotdeerOutput 		= "";
	$southlakesOutput 		= "";
	$taytoOutput			= "";
	$thrigbyOutput			= "";
	$tropiquariaOutput		= "";
	$twycrossOutput			= "";
	$welshMountainOutput	= "";
	$westmidOutput			= "";
	$whipOutput 			= "";
	$wildplaceOutput		= "";
	$woburnOutput 			= "";
	$wolfconOutput			= "";
	$woodsideOutput			= "";
	$yorkshireOutput		= "";


	if($lonCount !== 0){		
	while($row = mysqli_fetch_array($lonQuery)){
		$lonAnimal = $row['animal_name'];
		$lonTaxon = $row['animal_taxon'];

		$lonOutput .= "<div><div class='london-animals-wrapper'><span class='search-animal-name'>". $lonAnimal ." <i><span class='dt-hidden'><br></span>(". $lonTaxon .")</i></span></div></div>";
	};
	};

	if($whipCount !== 0){
	while($row = mysqli_fetch_array($whipQuery)){
		$whipAnimal = $row['animal_name'];
		$whipTaxon = $row['animal_taxon'];

		$whipOutput .= "<div><div class='whipsnade-animals-wrapper'><span class='search-animal-name'>". $whipAnimal ." <i><span class='dt-hidden'><br></span>(". $whipTaxon .")</i></span></div></div>";
	};
	};

	if($drusillaCount !== 0){
	while($row = mysqli_fetch_array($drusillaQuery)){
		$drusillaAnimal = $row['animal_name'];
		$drusillaTaxon = $row['animal_taxon'];

		$drusillaOutput .= "<div><div class='drusillas-animals-wrapper'><span class='search-animal-name'>". $drusillaAnimal ." <i><span class='dt-hidden'><br></span>(". $drusillaTaxon .")</i></span></div></div>";
	};
	};

	if($blackpoolCount !== 0){
	while($row = mysqli_fetch_array($blackpoolQuery)){
		$blackpoolAnimal = $row['animal_name'];
		$blackpoolTaxon = $row['animal_taxon'];

		$blackpoolOutput .= "<div><div class='blackpool-animals-wrapper'><span class='search-animal-name'>". $blackpoolAnimal ." <i><span class='dt-hidden'><br></span>(". $blackpoolTaxon .")</i></span></div></div>";
	};
	};

	if($scotdeerCount !== 0){
	while($row = mysqli_fetch_array($scotdeerQuery)){
		$scotdeerAnimal = $row['animal_name'];
		$scotdeerTaxon = $row['animal_taxon'];

		$scotdeerOutput .= "<div><div class='scotdeer-animals-wrapper'><span class='search-animal-name'>". $scotdeerAnimal ." <i><span class='dt-hidden'><br></span>(". $scotdeerTaxon .")</i></span></div></div>";
	};
	};

	if($cotwCount !== 0){
	while($row = mysqli_fetch_array($cotwQuery)){
		$cotwAnimal = $row['animal_name'];
		$cotwTaxon = $row['animal_taxon'];

		$cotwOutput .= "<div><div class='cotw-animals-wrapper'><span class='search-animal-name'>". $cotwAnimal ." <i><span class='dt-hidden'><br></span>(". $cotwTaxon .")</i></span></div></div>";
	};
	};

	if($camperdownCount !== 0){
	while($row = mysqli_fetch_array($camperdownQuery)){
		$camperdownAnimal = $row['animal_name'];
		$camperdownTaxon = $row['animal_taxon'];

		$camperdownOutput .= "<div><div class='camperdown-animals-wrapper'><span class='search-animal-name'>". $camperdownAnimal ." <i><span class='dt-hidden'><br></span>(". $camperdownTaxon .")</i></span></div></div>";
	};
	};

	if($kirkleyCount !== 0){
	while($row = mysqli_fetch_array($kirkleyQuery)){
		$kirkleyAnimal = $row['animal_name'];
		$kirkleyTaxon = $row['animal_taxon'];

		$kirkleyOutput .= "<div><div class='kirkley-animals-wrapper'><span class='search-animal-name'>". $kirkleyAnimal ." <i><span class='dt-hidden'><br></span>(". $kirkleyTaxon .")</i></span></div></div>";
	};
	};

	if($newforestCount !== 0){
	while($row = mysqli_fetch_array($newforestQuery)){
		$newforestAnimal = $row['animal_name'];
		$newforestTaxon = $row['animal_taxon'];

		$newforestOutput .= "<div><div class='newforest-animals-wrapper'><span class='search-animal-name'>". $newforestAnimal ." <i><span class='dt-hidden'><br></span>(". $newforestTaxon .")</i></span></div></div>";
	};
	};

	if($exmoorCount !== 0){
	while($row = mysqli_fetch_array($exmoorQuery)){
		$exmoorAnimal = $row['animal_name'];
		$exmoorTaxon = $row['animal_taxon'];

		$exmoorOutput .= "<div><div class='exmoor-animals-wrapper'><span class='search-animal-name'>". $exmoorAnimal ." <i><span class='dt-hidden'><br></span>(". $exmoorTaxon .")</i></span></div></div>";
	};
	};

	if($woburnCount !== 0){
	while($row = mysqli_fetch_array($woburnQuery)){
		$woburnAnimal = $row['animal_name'];
		$woburnTaxon = $row['animal_taxon'];

		$woburnOutput .= "<div><div class='woburn-animals-wrapper'><span class='search-animal-name'>". $woburnAnimal ." <i><span class='dt-hidden'><br></span>(". $woburnTaxon .")</i></span></div></div>";
	};
	};

	if($bristolCount !== 0){
	while($row = mysqli_fetch_array($bristolQuery)){
		$bristolAnimal = $row['animal_name'];
		$bristolTaxon = $row['animal_taxon'];

		$bristolOutput .= "<div><div class='bristol-animals-wrapper'><span class='search-animal-name'>". $bristolAnimal ." <i><span class='dt-hidden'><br></span>(". $bristolTaxon .")</i></span></div></div>";
	};
	};

	if($paradiseCount !== 0){
	while($row = mysqli_fetch_array($paradiseQuery)){
		$paradiseAnimal = $row['animal_name'];
		$paradiseTaxon = $row['animal_taxon'];

		$paradiseOutput .= "<div><div class='paradise-animals-wrapper'><span class='search-animal-name'>". $paradiseAnimal ." <i><span class='dt-hidden'><br></span>(". $paradiseTaxon .")</i></span></div></div>";
	};
	};

	if($wildplaceCount !== 0){
	while($row = mysqli_fetch_array($wildplaceQuery)){
		$wildplaceAnimal = $row['animal_name'];
		$wildplaceTaxon = $row['animal_taxon'];

		$wildplaceOutput .= "<div><div class='wildplace-animals-wrapper'><span class='search-animal-name'>". $wildplaceAnimal ." <i><span class='dt-hidden'><br></span>(". $wildplaceTaxon .")</i></span></div></div>";
	};
	};

	if($yorkshireCount !== 0){
	while($row = mysqli_fetch_array($yorkshireQuery)){
		$yorkshireAnimal = $row['animal_name'];
		$yorkshireTaxon = $row['animal_taxon'];

		$yorkshireOutput .= "<div><div class='yorkshire-animals-wrapper'><span class='search-animal-name'>". $yorkshireAnimal ." <i><span class='dt-hidden'><br></span>(". $yorkshireTaxon .")</i></span></div></div>";
	};
	};

	if($banhamCount !== 0){
	while($row = mysqli_fetch_array($banhamQuery)){
		$banhamAnimal = $row['animal_name'];
		$banhamTaxon = $row['animal_taxon'];

		$banhamOutput .= "<div><div class='banham-animals-wrapper'><span class='search-animal-name'>". $banhamAnimal ." <i><span class='dt-hidden'><br></span>(". $banhamTaxon .")</i></span></div></div>";
	};
	};

	if($africaaliveCount !== 0){
	while($row = mysqli_fetch_array($africaaliveQuery)){
		$africaaliveAnimal = $row['animal_name'];
		$africaaliveTaxon = $row['animal_taxon'];

		$africaaliveOutput .= "<div><div class='africaalive-animals-wrapper'><span class='search-animal-name'>". $africaaliveAnimal ." <i><span class='dt-hidden'><br></span>(". $africaaliveTaxon .")</i></span></div></div>";
	};
	};

	if($colchesterCount !== 0){
	while($row = mysqli_fetch_array($colchesterQuery)){
		$colchesterAnimal = $row['animal_name'];
		$colchesterTaxon = $row['animal_taxon'];

		$colchesterOutput .= "<div><div class='colchester-animals-wrapper'><span class='search-animal-name'>". $colchesterAnimal ." <i><span class='dt-hidden'><br></span>(". $colchesterTaxon .")</i></span></div></div>";
	};
	};

	if($twycrossCount !== 0){
	while($row = mysqli_fetch_array($twycrossQuery)){
		$twycrossAnimal = $row['animal_name'];
		$twycrossTaxon = $row['animal_taxon'];

		$twycrossOutput .= "<div><div class='twycross-animals-wrapper'><span class='search-animal-name'>". $twycrossAnimal ." <i><span class='dt-hidden'><br></span>(". $twycrossTaxon .")</i></span></div></div>";
	};
	};

	if($amazonworldCount !== 0){
	while($row = mysqli_fetch_array($amazonworldQuery)){
		$amazonworldAnimal = $row['animal_name'];
		$amazonworldTaxon = $row['animal_taxon'];

		$amazonworldOutput .= "<div><div class='amazonworld-animals-wrapper'><span class='search-animal-name'>". $amazonworldAnimal ." <i><span class='dt-hidden'><br></span>(". $amazonworldTaxon .")</i></span></div></div>";
	};
	};

	if($dublinCount !== 0){
	while($row = mysqli_fetch_array($dublinQuery)){
		$dublinAnimal = $row['animal_name'];
		$dublinTaxon = $row['animal_taxon'];

		$dublinOutput .= "<div><div class='dublin-animals-wrapper'><span class='search-animal-name'>". $dublinAnimal ." <i><span class='dt-hidden'><br></span>(". $dublinTaxon .")</i></span></div></div>";
	};
	};

	if($newquayCount !== 0){
	while($row = mysqli_fetch_array($newquayQuery)){
		$newquayAnimal = $row['animal_name'];
		$newquayTaxon = $row['animal_taxon'];

		$newquayOutput .= "<div><div class='newquay-animals-wrapper'><span class='search-animal-name'>". $newquayAnimal ." <i><span class='dt-hidden'><br></span>(". $newquayTaxon .")</i></span></div></div>";
	};
	};

	if($flamingolandCount !== 0){
	while($row = mysqli_fetch_array($flamingolandQuery)){
		$flamingolandAnimal = $row['animal_name'];
		$flamingolandTaxon = $row['animal_taxon'];

		$flamingolandOutput .= "<div><div class='flamingoland-animals-wrapper'><span class='search-animal-name'>". $flamingolandAnimal ." <i><span class='dt-hidden'><br></span>(". $flamingolandTaxon .")</i></span></div></div>";
	};
	};

	if($dudleyCount !== 0){
	while($row = mysqli_fetch_array($dudleyQuery)){
		$dudleyAnimal = $row['animal_name'];
		$dudleyTaxon = $row['animal_taxon'];

		$dudleyOutput .= "<div><div class='dudley-animals-wrapper'><span class='search-animal-name'>". $dudleyAnimal ." <i><span class='dt-hidden'><br></span>(". $dudleyTaxon .")</i></span></div></div>";
	};
	};

	if($draytonCount !== 0){
	while($row = mysqli_fetch_array($draytonQuery)){
		$draytonAnimal = $row['animal_name'];
		$draytonTaxon = $row['animal_taxon'];

		$draytonOutput .= "<div><div class='drayton-animals-wrapper'><span class='search-animal-name'>". $draytonAnimal ." <i><span class='dt-hidden'><br></span>(". $draytonTaxon .")</i></span></div></div>";
	};
	};

	if($edinburghCount !== 0){
	while($row = mysqli_fetch_array($edinburghQuery)){
		$edinburghAnimal = $row['animal_name'];
		$edinburghTaxon = $row['animal_taxon'];

		$edinburghOutput .= "<div><div class='edinburgh-animals-wrapper'><span class='search-animal-name'>". $edinburghAnimal ." <i><span class='dt-hidden'><br></span>(". $edinburghTaxon .")</i></span></div></div>";
	};
	};

	if($marwellCount !== 0){
	while($row = mysqli_fetch_array($marwellQuery)){
		$marwellAnimal = $row['animal_name'];
		$marwellTaxon = $row['animal_taxon'];

		$marwellOutput .= "<div><div class='marwell-animals-wrapper'><span class='search-animal-name'>". $marwellAnimal ." <i><span class='dt-hidden'><br></span>(". $marwellTaxon .")</i></span></div></div>";
	};
	};

	if($paigntonCount !== 0){
	while($row = mysqli_fetch_array($paigntonQuery)){
		$paigntonAnimal = $row['animal_name'];
		$paigntonTaxon = $row['animal_taxon'];

		$paigntonOutput .= "<div><div class='paignton-animals-wrapper'><span class='search-animal-name'>". $paigntonAnimal ." <i><span class='dt-hidden'><br></span>(". $paigntonTaxon .")</i></span></div></div>";
	};
	};

	if($dartmoorCount !== 0){
	while($row = mysqli_fetch_array($dartmoorQuery)){
		$dartmoorAnimal = $row['animal_name'];
		$dartmoorTaxon = $row['animal_taxon'];

		$dartmoorOutput .= "<div><div class='dartmoor-animals-wrapper'><span class='search-animal-name'>". $dartmoorAnimal ." <i><span class='dt-hidden'><br></span>(". $dartmoorTaxon .")</i></span></div></div>";
	};
	};

	if($durrellCount !== 0){
	while($row = mysqli_fetch_array($durrellQuery)){
		$durrellAnimal = $row['animal_name'];
		$durrellTaxon = $row['animal_taxon'];

		$durrellOutput .= "<div><div class='durrell-animals-wrapper'><span class='search-animal-name'>". $durrellAnimal ." <i><span class='dt-hidden'><br></span>(". $durrellTaxon .")</i></span></div></div>";
	};
	};

	if($fivesisCount !== 0){
	while($row = mysqli_fetch_array($fivesisQuery)){
		$fivesisAnimal = $row['animal_name'];
		$fivesisTaxon = $row['animal_taxon'];

		$fivesisOutput .= "<div><div class='fivesis-animals-wrapper'><span class='search-animal-name'>". $fivesisAnimal ." <i><span class='dt-hidden'><br></span>(". $fivesisTaxon .")</i></span></div></div>";
	};
	};

	if($follyCount !== 0){
	while($row = mysqli_fetch_array($follyQuery)){
		$follyAnimal = $row['animal_name'];
		$follyTaxon = $row['animal_taxon'];

		$follyOutput .= "<div><div class='folly-animals-wrapper'><span class='search-animal-name'>". $follyAnimal ." <i><span class='dt-hidden'><br></span>(". $follyTaxon .")</i></span></div></div>";
	};
	};

	if($blairDCount !== 0){
	while($row = mysqli_fetch_array($blairDQuery)){
		$blairDAnimal = $row['animal_name'];
		$blairDTaxon = $row['animal_taxon'];

		$blairDOutput .= "<div><div class='blairD-animals-wrapper'><span class='search-animal-name'>". $blairDAnimal ." <i><span class='dt-hidden'><br></span>(". $blairDTaxon .")</i></span></div></div>";
	};
	};

	if($batterseaCount !== 0){
	while($row = mysqli_fetch_array($batterseaQuery)){
		$batterseaAnimal = $row['animal_name'];
		$batterseaTaxon = $row['animal_taxon'];

		$batterseaOutput .= "<div><div class='battersea-animals-wrapper'><span class='search-animal-name'>". $batterseaAnimal ." <i><span class='dt-hidden'><br></span>(". $batterseaTaxon .")</i></span></div></div>";
	};
	};

	if($chestnutCount !== 0){
	while($row = mysqli_fetch_array($chestnutQuery)){
		$chestnutAnimal = $row['animal_name'];
		$chestnutTaxon = $row['animal_taxon'];

		$chestnutOutput .= "<div><div class='chestnut-animals-wrapper'><span class='search-animal-name'>". $chestnutAnimal ." <i><span class='dt-hidden'><br></span>(". $chestnutTaxon .")</i></span></div></div>";
	};
	};

	if($fotaCount !== 0){
	while($row = mysqli_fetch_array($fotaQuery)){
		$fotaAnimal = $row['animal_name'];
		$fotaTaxon = $row['animal_taxon'];

		$fotaOutput .= "<div><div class='fota-animals-wrapper'><span class='search-animal-name'>". $fotaAnimal ." <i><span class='dt-hidden'><br></span>(". $fotaTaxon .")</i></span></div></div>";
	};
	};

	if($gauntletCount !== 0){
	while($row = mysqli_fetch_array($gauntletQuery)){
		$gauntletAnimal = $row['animal_name'];
		$gauntletTaxon = $row['animal_taxon'];

		$gauntletOutput .= "<div><div class='gauntlet-animals-wrapper'><span class='search-animal-name'>". $gauntletAnimal ." <i><span class='dt-hidden'><br></span>(". $gauntletTaxon .")</i></span></div></div>";
	};
	};

	if($lakedistrictCount !== 0){
	while($row = mysqli_fetch_array($lakedistrictQuery)){
		$lakedistrictAnimal = $row['animal_name'];
		$lakedistrictTaxon = $row['animal_taxon'];

		$lakedistrictOutput .= "<div><div class='lakedistrict-animals-wrapper'><span class='search-animal-name'>". $lakedistrictAnimal ." <i><span class='dt-hidden'><br></span>(". $lakedistrictTaxon .")</i></span></div></div>";
	};
	};

	if($raptorCount !== 0){
	while($row = mysqli_fetch_array($raptorQuery)){
		$raptorAnimal = $row['animal_name'];
		$raptorTaxon = $row['animal_taxon'];

		$raptorOutput .= "<div><div class='raptor-animals-wrapper'><span class='search-animal-name'>". $raptorAnimal ." <i><span class='dt-hidden'><br></span>(". $raptorTaxon .")</i></span></div></div>";
	};
	};

	if($secretValleyCount !== 0){
	while($row = mysqli_fetch_array($secretValleyQuery)){
		$secretValleyAnimal = $row['animal_name'];
		$secretValleyTaxon = $row['animal_taxon'];

		$secretValleyOutput .= "<div><div class='secretValley-animals-wrapper'><span class='search-animal-name'>". $secretValleyAnimal ." <i><span class='dt-hidden'><br></span>(". $secretValleyTaxon .")</i></span></div></div>";
	};
	};

	if($taytoCount !== 0){
	while($row = mysqli_fetch_array($taytoQuery)){
		$taytoAnimal = $row['animal_name'];
		$taytoTaxon = $row['animal_taxon'];

		$taytoOutput .= "<div><div class='tayto-animals-wrapper'><span class='search-animal-name'>". $taytoAnimal ." <i><span class='dt-hidden'><br></span>(". $taytoTaxon .")</i></span></div></div>";
	};
	};

	if($lintonCount !== 0){
	while($row = mysqli_fetch_array($lintonQuery)){
		$lintonAnimal = $row['animal_name'];
		$lintonTaxon = $row['animal_taxon'];

		$lintonOutput .= "<div><div class='linton-animals-wrapper'><span class='search-animal-name'>". $lintonAnimal ." <i><span class='dt-hidden'><br></span>(". $lintonTaxon .")</i></span></div></div>";
	};
	};

	if($mablethorpeCount !== 0){
	while($row = mysqli_fetch_array($mablethorpeQuery)){
		$mablethorpeAnimal = $row['animal_name'];
		$mablethorpeTaxon = $row['animal_taxon'];

		$mablethorpeOutput .= "<div><div class='mablethorpe-animals-wrapper'><span class='search-animal-name'>". $mablethorpeAnimal ." <i><span class='dt-hidden'><br></span>(". $mablethorpeTaxon .")</i></span></div></div>";
	};
	};

	if($westmidCount !== 0){
	while($row = mysqli_fetch_array($westmidQuery)){
		$westmidAnimal = $row['animal_name'];
		$westmidTaxon = $row['animal_taxon'];

		$westmidOutput .= "<div><div class='westmid-animals-wrapper'><span class='search-animal-name'>". $westmidAnimal ." <i><span class='dt-hidden'><br></span>(". $westmidTaxon .")</i></span></div></div>";
	};
	};

	if($iowCount !== 0){
	while($row = mysqli_fetch_array($iowQuery)){
		$iowAnimal = $row['animal_name'];
		$iowTaxon = $row['animal_taxon'];

		$iowOutput .= "<div><div class='iow-animals-wrapper'><span class='search-animal-name'>". $iowAnimal ." <i><span class='dt-hidden'><br></span>(". $iowTaxon .")</i></span></div></div>";
	};
	};

	if($lakeOasisCount !== 0){
	while($row = mysqli_fetch_array($lakeOasisQuery)){
		$lakeOasisAnimal = $row['animal_name'];
		$lakeOasisTaxon = $row['animal_taxon'];

		$lakeOasisOutput .= "<div><div class='lakeoasis-animals-wrapper'><span class='search-animal-name'>". $lakeOasisAnimal ." <i><span class='dt-hidden'><br></span>(". $lakeOasisTaxon .")</i></span></div></div>";
	};
	};

	if($woodsideCount !== 0){
	while($row = mysqli_fetch_array($woodsideQuery)){
		$woodsideAnimal = $row['animal_name'];
		$woodsideTaxon = $row['animal_taxon'];

		$woodsideOutput .= "<div><div class='woodside-animals-wrapper'><span class='search-animal-name'>". $woodsideAnimal ." <i><span class='dt-hidden'><br></span>(". $woodsideTaxon .")</i></span></div></div>";
	};
	};

	if($lincswpCount !== 0){
	while($row = mysqli_fetch_array($lincswpQuery)){
		$lincswpAnimal = $row['animal_name'];
		$lincswpTaxon = $row['animal_taxon'];

		$lincswpOutput .= "<div><div class='lincswp-animals-wrapper'><span class='search-animal-name'>". $lincswpAnimal ." <i><span class='dt-hidden'><br></span>(". $lincswpTaxon .")</i></span></div></div>";
	};
	};

	if($cotswoldCount !== 0){
	while($row = mysqli_fetch_array($cotswoldQuery)){
		$cotswoldAnimal = $row['animal_name'];
		$cotswoldTaxon = $row['animal_taxon'];

		$cotswoldOutput .= "<div><div class='cotswold-animals-wrapper'><span class='search-animal-name'>". $cotswoldAnimal ." <i><span class='dt-hidden'><br></span>(". $cotswoldTaxon .")</i></span></div></div>";
	};
	};

	if($bealeparkCount !== 0){
	while($row = mysqli_fetch_array($bealeparkQuery)){
		$bealeparkAnimal = $row['animal_name'];
		$bealeparkTaxon = $row['animal_taxon'];

		$bealeparkOutput .= "<div><div class='bealepark-animals-wrapper'><span class='search-animal-name'>". $bealeparkAnimal ." <i><span class='dt-hidden'><br></span>(". $bealeparkTaxon .")</i></span></div></div>";
	};
	};

	if($combeMartinCount !== 0){
	while($row = mysqli_fetch_array($combeMartinQuery)){
		$combeMartinAnimal = $row['animal_name'];
		$combeMartinTaxon = $row['animal_taxon'];

		$combeMartinOutput .= "<div><div class='combeMartin-animals-wrapper'><span class='search-animal-name'>". $combeMartinAnimal ." <i><span class='dt-hidden'><br></span>(". $combeMartinTaxon .")</i></span></div></div>";
	};
	};

	if($harewoodCount !== 0){
	while($row = mysqli_fetch_array($harewoodQuery)){
		$harewoodAnimal = $row['animal_name'];
		$harewoodTaxon = $row['animal_taxon'];

		$harewoodOutput .= "<div><div class='harewood-animals-wrapper'><span class='search-animal-name'>". $harewoodAnimal ." <i><span class='dt-hidden'><br></span>(". $harewoodTaxon .")</i></span></div></div>";
	};
	};

	if($tropiquariaCount !== 0){
	while($row = mysqli_fetch_array($tropiquariaQuery)){
		$tropiquariaAnimal = $row['animal_name'];
		$tropiquariaTaxon = $row['animal_taxon'];

		$tropiquariaOutput .= "<div><div class='tropiquaria-animals-wrapper'><span class='search-animal-name'>". $tropiquariaAnimal ." <i><span class='dt-hidden'><br></span>(". $tropiquariaTaxon .")</i></span></div></div>";
	};
	};

	if($thrigbyCount !== 0){
	while($row = mysqli_fetch_array($thrigbyQuery)){
		$thrigbyAnimal = $row['animal_name'];
		$thrigbyTaxon = $row['animal_taxon'];

		$thrigbyOutput .= "<div><div class='thrigby-animals-wrapper'><span class='search-animal-name'>". $thrigbyAnimal ." <i><span class='dt-hidden'><br></span>(". $thrigbyTaxon .")</i></span></div></div>";
	};
	};

	if($wolfconCount !== 0){
	while($row = mysqli_fetch_array($wolfconQuery)){
		$wolfconAnimal = $row['animal_name'];
		$wolfconTaxon = $row['animal_taxon'];

		$wolfconOutput .= "<div><div class='wolfcon-animals-wrapper'><span class='search-animal-name'>". $wolfconAnimal ." <i><span class='dt-hidden'><br></span>(". $wolfconTaxon .")</i></span></div></div>";
	};
	};

	if($chessingtonCount !== 0){
	while($row = mysqli_fetch_array($chessingtonQuery)){
		$chessingtonAnimal = $row['animal_name'];
		$chessingtonTaxon = $row['animal_taxon'];

		$chessingtonOutput .= "<div><div class='chessington-animals-wrapper'><span class='search-animal-name'>". $chessingtonAnimal ." <i><span class='dt-hidden'><br></span>(". $chessingtonTaxon .")</i></span></div></div>";
	};
	};

	if($chesterCount !== 0){
	while($row = mysqli_fetch_array($chesterQuery)){
		$chesterAnimal = $row['animal_name'];
		$chesterTaxon = $row['animal_taxon'];

		$chesterOutput .= "<div><div class='chester-animals-wrapper'><span class='search-animal-name'>". $chesterAnimal ." <i><span class='dt-hidden'><br></span>(". $chesterTaxon .")</i></span></div></div>";
	};
	};

	if($peakWildlifeCount !== 0){
	while($row = mysqli_fetch_array($peakWildlifeQuery)){
		$peakWildlifeAnimal = $row['animal_name'];
		$peakWildlifeTaxon = $row['animal_taxon'];

		$peakWildlifeOutput .= "<div><div class='peakWildlife-animals-wrapper'><span class='search-animal-name'>". $peakWildlifeAnimal ." <i><span class='dt-hidden'><br></span>(". $peakWildlifeTaxon .")</i></span></div></div>";
	};
	};

	if($manorHouseCount !== 0){
	while($row = mysqli_fetch_array($manorHouseQuery)){
		$manorHouseAnimal = $row['animal_name'];
		$manorHouseTaxon = $row['animal_taxon'];

		$manorHouseOutput .= "<div><div class='manorHouse-animals-wrapper'><span class='search-animal-name'>". $manorHouseAnimal ." <i><span class='dt-hidden'><br></span>(". $manorHouseTaxon .")</i></span></div></div>";
	};
	};

	if($welshMountainCount !== 0){
	while($row = mysqli_fetch_array($welshMountainQuery)){
		$welshMountainAnimal = $row['animal_name'];
		$welshMountainTaxon = $row['animal_taxon'];

		$welshMountainOutput .= "<div><div class='welshMountain-animals-wrapper'><span class='search-animal-name'>". $welshMountainAnimal ." <i><span class='dt-hidden'><br></span>(". $welshMountainTaxon .")</i></span></div></div>";
	};
	};

	if($highlandCount !== 0){
	while($row = mysqli_fetch_array($highlandQuery)){
		$highlandAnimal = $row['animal_name'];
		$highlandTaxon = $row['animal_taxon'];

		$highlandOutput .= "<div><div class='highland-animals-wrapper'><span class='search-animal-name'>". $highlandAnimal ." <i><span class='dt-hidden'><br></span>(". $highlandTaxon .")</i></span></div></div>";
	};
	};

	if($noahsarkCount !== 0){
	while($row = mysqli_fetch_array($noahsarkQuery)){
		$noahsarkAnimal = $row['animal_name'];
		$noahsarkTaxon = $row['animal_taxon'];

		$noahsarkOutput .= "<div><div class='noahsark-animals-wrapper'><span class='search-animal-name'>". $noahsarkAnimal ." <i><span class='dt-hidden'><br></span>(". $noahsarkTaxon .")</i></span></div></div>";
	};
	};

	if($birdlandCount !== 0){
	while($row = mysqli_fetch_array($birdlandQuery)){
		$birdlandAnimal = $row['animal_name'];
		$birdlandTaxon = $row['animal_taxon'];

		$birdlandOutput .= "<div><div class='birdland-animals-wrapper'><span class='search-animal-name'>". $birdlandAnimal ." <i><span class='dt-hidden'><br></span>(". $birdlandTaxon .")</i></span></div></div>";
	};
	};

	if($knowsleyCount !== 0){
	while($row = mysqli_fetch_array($knowsleyQuery)){
		$knowsleyAnimal = $row['animal_name'];
		$knowsleyTaxon = $row['animal_taxon'];

		$knowsleyOutput .= "<div><div class='knowsley-animals-wrapper'><span class='search-animal-name'>". $knowsleyAnimal ." <i><span class='dt-hidden'><br></span>(". $knowsleyTaxon .")</i></span></div></div>";
	};
	};

	if($southlakesCount !== 0){
	while($row = mysqli_fetch_array($southlakesQuery)){
		$southlakesAnimal = $row['animal_name'];
		$southlakesTaxon = $row['animal_taxon'];

		$southlakesOutput .= "<div><div class='southlakes-animals-wrapper'><span class='search-animal-name'>". $southlakesAnimal ." <i><span class='dt-hidden'><br></span>(". $southlakesTaxon .")</i></span></div></div>";
	};
	};

	if($monkeyWorldCount !== 0){
	while($row = mysqli_fetch_array($monkeyWorldQuery)){
		$monkeyWorldAnimal = $row['animal_name'];
		$monkeyWorldTaxon = $row['animal_taxon'];

		$monkeyWorldOutput .= "<div><div class='monkeyWorld-animals-wrapper'><span class='search-animal-name'>". $monkeyWorldAnimal ." <i><span class='dt-hidden'><br></span>(". $monkeyWorldTaxon .")</i></span></div></div>";
	};
	};

	if($hamertonCount !== 0){
	while($row = mysqli_fetch_array($hamertonQuery)){
		$hamertonAnimal = $row['animal_name'];
		$hamertonTaxon = $row['animal_taxon'];

		$hamertonOutput .= "<div><div class='hamerton-animals-wrapper'><span class='search-animal-name'>". $hamertonAnimal ." <i><span class='dt-hidden'><br></span>(". $hamertonTaxon .")</i></span></div></div>";
	};
	};

	if($belfastCount !== 0){
	while($row = mysqli_fetch_array($belfastQuery)){
		$belfastAnimal = $row['animal_name'];
		$belfastTaxon = $row['animal_taxon'];

		$belfastOutput .= "<div><div class='belfast-animals-wrapper'><span class='search-animal-name'>". $belfastAnimal ." <i><span class='dt-hidden'><br></span>(". $belfastTaxon .")</i></span></div></div>";
	};
	};

	if($arkWildlifeCount !== 0){
	while($row = mysqli_fetch_array($arkWildlifeQuery)){
		$arkWildlifeAnimal = $row['animal_name'];
		$arkWildlifeTaxon = $row['animal_taxon'];

		$arkWildlifeOutput .= "<div><div class='arkWildlife-animals-wrapper'><span class='search-animal-name'>". $arkWildlifeAnimal ." <i><span class='dt-hidden'><br></span>(". $arkWildlifeTaxon .")</i></span></div></div>";
	};
	};

	if($jimmysFarmCount !== 0){
	while($row = mysqli_fetch_array($jimmysFarmQuery)){
		$jimmysFarmAnimal = $row['animal_name'];
		$jimmysFarmTaxon = $row['animal_taxon'];

		$jimmysFarmOutput .= "<div><div class='jimmysFarm-animals-wrapper'><span class='search-animal-name'>". $jimmysFarmAnimal ." <i><span class='dt-hidden'><br></span>(". $jimmysFarmTaxon .")</i></span></div></div>";
	};
	};
}
