<?php

$league = $leagues[$league_url_param];

$clubs = [

	'man_city' => ['Manchester City', $leagues["en-premier-league"]], 
	'man_utd' => ['Manchester Utd', $leagues["en-premier-league"]],
	'crystal_palace' => ['Crystal Palace', $leagues["en-premier-league"]],
	'wba' => ['WBA', $leagues["en-premier-league"]]

];


?>



<div class="league-page">
	<div class="league-page-navigation">

		<div class="league-page-navigation-table" rel="table">
			<img width="32" src="images/icons/table.png">
		</div>

		<div class="league-page-navigation-matches" rel="matches">
			<img width="32" src="images/icons/matches.png">
		</div>

		<div class="league-page-navigation-history" rel="history">
			<img width="32" src="images/icons/history.png">
		</div>

	</div>

	<div class="league-page-display">
		<?php 

			$to_include = 'league_table.php';

			if(isset($_GET['table']))
			{
				$to_include = 'league_table.php';
			}

			if(isset($_GET['matches']))
			{
				$to_include = 'league_matches.php';
			}

			if(isset($_GET['history']))
			{
				$to_include = 'league_history.php';
			}

			include $to_include;

		?>
	</div>
</div>

