<?php 

$path = substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '&'));
$url = $path == "" ? $_SERVER['REQUEST_URI'] : $path;

if(isset($_GET['club'])) 
{
	if(in_array($_GET['club'], array_keys($clubs)))
	{
		$club = $clubs[$_GET['club']];
		$club_key = $_GET['club'];
	}
	else 
	{
		$club = [];
		echo "<h2 style='color: darkred;'> Greška: klub se ne nalazi u našoj bazi podataka. </h2>";
	}
	
}
else 
{
	header("Location: index.php");
}

?>



<div class="club-page">

	<nav class="navbar navbar-expand-lg navbar-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse">
			<ul class="navbar-nav">
			  
			  <li class="nav-item">
			    <a class="nav-link" href="<?= $url ?>&info">Pregled</a>
			  </li>

			  <li class="nav-item">
			    <a class="nav-link" href="<?= $url ?>&results">Rezultati</a>
			  </li>

			  <li class="nav-item">
			    <a class="nav-link" href="<?= $url ?>&squad">Sastav</a>
			  </li>

			</ul>
		</div>
	</nav>

	<?php 

	if(!empty($club)) : 

		$to_include = 'club_info.php';

		if(isset($_GET['info']))
			$to_include = 'club_info.php';
		
		if(isset($_GET['results']))
			$to_include = 'club_results.php';

		if(isset($_GET['squad']))
			$to_include = 'club_squad.php';

		include $to_include;

	endif; 

	?>

</div>