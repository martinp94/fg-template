<?php 


$clubs_ranked = [
	1 => [
		"barcelona",
		$clubs["barcelona"]
	],
	2 => [
		"real_madrid",
		$clubs["real_madrid"]
	],
	3 => [
		"man_city",
		$clubs["man_city"]
	],
	4 => [
		"bayern_munich",
		$clubs["bayern_munich"]
	],
	5 => [
		"juventus",
		$clubs["juventus"]
	],
	6 => [
		"psg",
		$clubs["psg"]
	],
	954 => [
		"sindjelic_beograd",
		$clubs["sindjelic_beograd"]
	],
	1068 => [
		"bokelj",
		$clubs["bokelj"]
	],
	1218 => [
		"crvena_stijena",	
		$clubs["crvena_stijena"]
	],
	1442 => [
		"turnovo",
		$clubs["turnovo"]
	],
	1510 => [
		"novigrad",
		$clubs["novigrad"]
	]
];

$clubs_by_country = [

];

?>

<div class="clubs">

	<ul class="clubs-header">
		<li class="clubs-header-rank">Rank</li>
		<li class="clubs-header-club">Klub</li>
		<li class="clubs-header-country">Država</li>
		<li class="clubs-header-league">Liga</li>
		<li class="clubs-header-league-pos">Pozicija u Ligi</li>
	</ul>

	

	<?php foreach($clubs_ranked as $rank => $club) : ?>
		

		<ul class="clubs-list">
			<li>
				<div class="clubs-list-rank">
					<?= $rank; ?>
				</div>

				<div class="clubs-list-club-image">
					<img width="32" src="images/club_logos/<?= $club[0]; ?>.jpg">
				</div>

				<div class="clubs-list-club-name">
					<a href="index.php?club=<?= $club[0]; ?>">
						
						<?= $club[1]["club_name"]; ?>

					</a>
				</div>

				<div class="clubs-list-club-country-image">

					<a href="index.php?leagues&country=<?= $club[1]["league"][1][1]; ?>">
						<img width="32" src="images/countries/<?= $club[1]["league"][1][1]; ?>.jpg">
					</a>
					
				</div>

				<div class="clubs-list-club-league">

					<a href="index.php?league=<?= $club[1]["league"][0]; ?>">
						<?= $club[1]["league"][1][0]; ?>
						
					</a>
					
				</div>

				<div class="clubs-list-club-league-image">
					<img width="32" src="images/league_logos/<?= $club[1]["league"][0]; ?>.jpg">
				</div>

				<div class="clubs-list-club-league-position">
					<?= $club[1]["league-pos"]; ?>
				</div>	
			</li>
		</ul> 
	<?php endforeach; ?>
</div>