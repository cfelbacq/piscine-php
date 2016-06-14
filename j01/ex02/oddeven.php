#!/usr/bin/php
<?php
	while (1)
	{
		echo "Entrez un nombre: ";
		if (($line = fgets(STDIN)) == false)
		{
			echo ("^D\n");
			exit;
		}
		$line = substr($line, 0, -1);
			if (is_numeric($line) == true)
			{
				if ($line % 2 == 0)
					echo "le chiffre ".$line." est Pair\n";
				else
					echo "le chiffre ".$line." est Impair\n";
			}
			else
				echo "'".$line."'"." n'est pas un chiffre\n";
	}
?>