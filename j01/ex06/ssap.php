#!/usr/bin/php
<?php
	
	function ft_epur_str($str)
	{
		$new = explode(" ", $str);
		$new = array_filter($new);
		return ($new);
	}
	
	function ft_print_array($array)
	{
		$nb_case = count($array);
		for ($j = 0; $j < $nb_case; $j++)
			echo ($array[$j])."\n";
	}

	$result = array();
	$i = 1;
	
	while ($i < $argc)
	{
		$result = array_merge($result, ft_epur_str($argv[$i]));
		$i++;
	}
	sort($result);
	ft_print_array($result);
?>