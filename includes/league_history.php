<?php

$path = $_SERVER['REQUEST_URI'];


$path = substr($path, 0, strpos($path, '&')) . "&table&season=";

?>

<div class="league-history">
	<ul>
		<li><a href="<?php echo $path ?>2016-17"> Sezona 2016/2017 </a></li>
		<li><a href="<?php echo $path ?>2015-16"> Sezona 2015/2016 </a></li>
		<li><a href="<?php echo $path ?>2014-15"> Sezona 2014/2015 </a></li>
		<li><a href="<?php echo $path ?>2013-14"> Sezona 2013/2014 </a></li>
		<li><a href="<?php echo $path ?>2012-13"> Sezona 2012/2013 </a></li>
		<li><a href="<?php echo $path ?>2011-12"> Sezona 2011/2012 </a></li>
		<li><a href="<?php echo $path ?>2010-11"> Sezona 2010/2011 </a></li>
		<li><a href="<?php echo $path ?>2009-10"> Sezona 2009/2010 </a></li>
		<li><a href="<?php echo $path ?>test"> Sezona ......... </a></li>
		<li><a href="<?php echo $path ?>1998-99"> Sezona 1998/1999 </a></li>
	</ul>
</div>