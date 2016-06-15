#!/usr/bin/php
<?php
	function ft_is_sort($tableau)
	{
		$len_tab = count($tableau);
		if ($len_tab == 1)
			return (true);
		$i = 0;
		$j = 1;
		while ($j < $len_tab)
		{
			if (strcmp($tableau[$i], $tableau[$j]) > 0)
				return (false);
			$i++;
			$j++;		
		}
		return (true);
	}
?>