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
			echo $array[$j]."\n";
	}

	function ft_sort_ssap2($tosort)
	{
		natcasesort($tosort);
		$tosort = array_merge($tosort);
		print_r($tosort);
		return ($tosort);
	}

	$result = array();
	$i = 1;
	
	while ($i < $argc)
	{
		$result = array_merge($result, ft_epur_str($argv[$i]));
		$i++;
	}
	ft_print_array(ft_sort_ssap2($result));
?>