<?php
if(!isset($params[2])) {
	$params[2] = 1;
}
$groups = $_groups->getGroups(10, $params[2]);
$count_pages = ((int)$_groups->countAll() / 10) + 1;
