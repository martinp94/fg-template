<div class="main-content">
	 <?php 

	$leagues = [
		'ger-bundesliga1' => ['Bundesliga', 'Germany'],
		'en-premier-league' => ['Premier League', 'England'],
		'la-liga1' => ['La Liga', 'Spain'],
		'srb-super-liga' => ['Super Liga', 'Serbia'],
		'mne-telekom-league' => ['Crnogorska Telekom Liga', 'Montenegro'],
		'ligue-1' => ['Ligue 1', 'France'],
		'prva-mkd' => ['Makedonska 1. Liga', 'Fyrom'],
		'hnl-1' => ['1. HNL', 'Croatia'],
		'serie-A' => ['Serie A' , 'Italy']
	];

	$champions_league = ['champions_league', 'name' => 'Liga Šampiona'];

	$europa_league = ['key' => 'europa_league', 'name' => 'Liga Evrope'];

	$friendly_matches = ['key' => 'friendly_matches', 'name' => 'Prijateljske utakmice'];

	$clubs = [

		'real_madrid' => [
			'club_name' => 'Real Madrid',
			'league' => ["la-liga1", $leagues["la-liga1"]],
			'league-pos' => 1
		],
		'barcelona' => [
			'club_name' => 'FC Barcelona',
			'league' => ["la-liga1", $leagues["la-liga1"]],
			'league-pos' => 2
		],
		'psg' => [
			'club_name' => 'PSG',
			'league' => ["ligue-1", $leagues["ligue-1"]],
			'league-pos' => 1
		],
		'man_city' => [
			'club_name' => 'Manchester City',
			'league' => ["en-premier-league", $leagues["en-premier-league"]],
			'league-pos' => 1

		],
		'juventus' => [
			'club_name' => 'Juventus',
			'league' => ["serie-A", $leagues["serie-A"]],
			'league-pos' => 1
		],
		'bayern_munich' => [
			'club_name' => 'Bayern Munich',
			'league' => ["ger-bundesliga1", $leagues["ger-bundesliga1"]],
			'league-pos' => 1
		],
		'crvena_stijena' => [
			'club_name' => 'Crvena Stijena',
			'league' => ["mne-telekom-league", $leagues["mne-telekom-league"]],
			'league-pos' => 5
		],
		'bokelj' => [
			'club_name' => 'FK Bokelj',
			'league' => ["mne-telekom-league", $leagues["mne-telekom-league"]],
			'league-pos' => 9
		],
		'sindjelic_beograd' => [
			'club_name' => 'Sindjelic Beograd',
			'league' => ["srb-super-liga", $leagues["srb-super-liga"]],
			'league-pos' => 7
		],
		'turnovo' => [
			'club_name' => 'Turnovo',
			'league' => ["prva-mkd", $leagues["prva-mkd"]],
			'league-pos' => 6
		],
		'novigrad' => [
			'club_name' => 'Novigrad',
			'league' => ["hnl-1", $leagues["hnl-1"]],
			'league-pos' => 10
		]
	];

	if(empty($_GET))
	{
		include 'matches_last_7_days.php';
	}

	if(isset($_GET['today']))
	{
		include 'matches_last_7_days.php';
	}

	if(isset($_GET['live']))
	{
		include 'matches_live.php';
	}

 	if(isset($_GET['leagues']))
 	{
 		include 'leagues_all.php';
 	}

 	if(isset($_GET['league']))
 	{
 		$league_url_param = $_GET['league'];

 		if($league_url_param)
 			include 'league_page.php';
 	}

 	if(isset($_GET['clubs']))
 	{
 		include 'clubs_all.php';
 	}

 	if(isset($_GET['club']))
 	{
 		include 'club_page.php';
 	}

	if(isset($_GET['player']))
	{
		include 'player_info.php';
	}

	?>
</div>