
<?php 

$club_name = $club["club_name"];
$club_image = "images/club_logos/{$club_key}.jpg";
$club_league = $club["league"][1][0];
$club_league_image = "images/league_logos/{$club["league"][0]}.jpg";

?>

<div class="club-info">
	<div class="club-image">
		<img width="128" src="<?= $club_image; ?>">
	</div>

	<div class="club-name">
		
		<a href="index.php?club=<?= $club_key; ?>">
			
			<?= $club_name; ?>
		</a>
		
	</div>

	<div class="club-league">

		<a href="index.php?league=<?= $club["league"][0]; ?>">
			<?= $club_league; ?>
		</a>
		<img width="32" src="<?= $club_league_image; ?>">
	</div>

</div>