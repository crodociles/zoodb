<?php

$search = $_GET['search'];
$search = strtolower($search);
$search = trim($search,$character_mask = " \t\n\r\0\x0B");
$search = str_replace('-', ' ', $search);
$search = preg_replace('/[^ \w]+/', '', $search);

?>