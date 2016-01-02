<?php
	require_once "James1.php";
	require_once "James2.php";

	use \Cantores\TripHop\James as JamesBlunt;
	use \Cantores\HeavyMetal\James as JamesHatfield;
	
	$jamesBlunt = new JamesBlunt('TripHop');
	$jamesBlunt->dizOi();

	$jamesHatfield = new JamesHatfield('Heavy Metal');
	$jamesHatfield->dizOi();