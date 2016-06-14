#!/usr/bin/php
<?php
function ft_split($str)
{
	$new = explode(" ", $str);
	$new = array_filter($new);
	sort($new);
	if (count($new) != 0)
		return $new;
}
?>