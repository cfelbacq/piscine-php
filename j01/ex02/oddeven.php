#!/usr/bin/php
<?php
	while (1)
	{
		echo "Entrez un nombre: ";
		if (($line = fgets(STDIN)) == False)
		{
			echo "\n";
			exit(0);
		}
		$line = substr($line, 0, -1);
			if (is_numeric($line) == true && strlen($line) > 0)
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