#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$new = explode(" ", $str);
		$new = array_filter($new);
		$new = array_merge($new);
		return $new;
	}

	if ($argc == 2)
	{
		$tab = ft_split($argv[1]);
		$nb = count($tab);
		for ($i = 0; $i < $nb ;$i++)
		{
			echo ($tab[$i]);
			if ($i + 1 < $nb)
				echo " ";
		}
		echo "\n";
	}
	else
		echo "Nombre d'argument invalide.\n";
?>
