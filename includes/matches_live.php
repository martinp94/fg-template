<div class="matches-today">

	<div class="matches-competition">

		<div class="matches-competition-header">
			<?= $champions_league["name"]; ?>
		</div>

		<div class="competition-fixture live">
			<div class="fixture-team1">
				<?= $clubs["real_madrid"]["club_name"]; ?> 
				<img width="16" src="images/club_logos/real_madrid.jpg">
			</div>

			<div class="fixture-result"> - : - </div>
			
			<div class="fixture-team1">
				<?= $clubs["bayern_munich"]["club_name"]; ?> 
				<img width="16" src="images/club_logos/bayern_munich.jpg">
			</div>

			<div class="fixture-time">20:45</div>
			<div class="fixture-description">Grupna faza</div>
		</div>

	</div>

	<div class="matches-competition">
		<div class="matches-competition-header">
			<?= $friendly_matches["name"]; ?>
		</div>

		<div class="competition-fixture live">
			<div class="fixture-team1">
				<?= $clubs["bokelj"]["club_name"]; ?> 
				<img width="16" src="images/club_logos/bokelj.jpg">
			</div>

			<div class="fixture-result"> - : - </div>
			
			<div class="fixture-team1">
				<?= $clubs["crvena_stijena"]["club_name"]; ?> 
				<img width="16" src="images/club_logos/crvena_stijena.jpg">
			</div>

			<div class="fixture-time"> 11:00 </div>
			<div class="fixture-description">Prijateljska utakmica</div>
		</div>
		
	</div>

</div>