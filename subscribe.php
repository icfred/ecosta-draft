<?php

error_reporting(0);

if (strlen($_POST['Email']) < 3) { print '0'; die(); }

$File = '_data/emails.txt';

$Email = $_POST['Email'];

if (file_put_contents($File, $Email.",\n", FILE_APPEND)) {
	print '1';
	die();
} else {
	print '0';
	die();
}