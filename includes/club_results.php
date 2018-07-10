

<div class="club-matches">
	<div class="club-matches-competition">
		<div class="club-matches-competition-header"></div>

		<?php for($i = 1; $i <= 4; $i++): ?>

		<div class="competition-fixture league">
			<div class="fixture-team1">

				<a href="index.php?club=<?= $_GET['club']; ?>">

					<?= $club["club_name"]; ?>
				
				</a>

				 
				<img width="16" src="images/club_logos/<?= $_GET['club']; ?>.jpg">
			</div>
			<div class="fixture-result">X:X</div>
			<div class="fixture-team2">Klub X</div>
			<div class="fixture-date">XX.XX.2016(17)</div>
			<div class="fixture-time">16:00</div>
			<div class="fixture-league">

				<a href="index.php?league=<?= $club["league"][0]; ?>">

					<?= $club["league"][1][0]; ?>

				</a>
				
					
			</div>
			<div class="fixture-season">Sezona 2016-17</div>
			<div class="fixture-round">Kolo <?= $i; ?></div>
		</div>

		<?php endfor; ?>

		<div class="competition-fixture champions-league">
			<div class="fixture-team1">
				<?= $club["club_name"]; ?> 
				<img width="16" src="images/club_logos/<?= $_GET['club']; ?>.jpg">
			</div>
			<div class="fixture-result">X:X</div>
			<div class="fixture-team2">Porto FC</div>
			<div class="fixture-date">XX.XX.2016(17)</div>
			<div class="fixture-time">20:45</div>
			<div class="fixture-time">Liga Šampiona</div>
			<div class="fixture-time">Sezona 2016-17</div>
			<div class="fixture-time">Grupna faza</div>
		</div>

		<div class="competition-fixture champions-league">
			<div class="fixture-team1">
				<?= $club["club_name"]; ?> 
				<img width="16" src="images/club_logos/<?= $_GET['club']; ?>.jpg">
			</div>
			<div class="fixture-result">X:X</div>
			<div class="fixture-team2">Basel</div>
			<div class="fixture-date">XX.XX.2016(17)</div>
			<div class="fixture-time">20:45</div>
			<div class="fixture-time">Liga Šampiona</div>
			<div class="fixture-time">Sezona 2016-17</div>
			<div class="fixture-time">Grupna faza</div>
		</div>

		<?php for($i = 25; $i <= 33; $i++): ?>

		<div class="competition-fixture league">
			<div class="fixture-team1">
				<?= $club["club_name"]; ?> 
				<img width="16" src="images/club_logos/<?= $_GET['club']; ?>.jpg">
			</div>
			<div class="fixture-result">X:X</div>
			<div class="fixture-team2">Klub X</div>
			<div class="fixture-date">XX.XX.2015(16)</div>
			<div class="fixture-time">16:00</div>
			<div class="fixture-time"><?= $club["league"][1][0]; ?></div>
			<div class="fixture-time">Sezona 2015-16</div>
			<div class="fixture-time">Kolo <?= $i; ?> </div>
		</div>

		<?php endfor; ?>


	</div>
</div>