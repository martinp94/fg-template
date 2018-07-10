<?php
	if(isset($_GET['country']))
	{
		$leagues = array_filter($leagues, function($var) {
			return $_GET['country'] == $var[1];
		});
	}
?>


<div class="leagues-all">
	
	<ul>
		<?php foreach($leagues as $league_key => $league) : ?>
			<li> 

				<div class="league-country-image">
					<img width="32" src="images/countries/<?php echo $league[1];  ?>.jpg">
				</div>

				<div class="league-name">
					<a href="index.php?league=<?php echo $league_key; ?>"> <?php echo $league[0]; ?> </a>
				</div>

				<div class="league-logo">
					<img width="128" src="images/league_logos/<?php echo $league_key;  ?>.jpg">
				</div>

				


			</li>

		<?php endforeach; ?>
	</ul>

</div>