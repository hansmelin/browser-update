<?php

if (count($_SERVER['argv']) != 2)
	die('Usage: '.$_SERVER['argv'][0]. ' <LOCALE>');

$locale = $_SERVER['argv'][1];
$dir = dirname(dirname(__FILE__));
$lang_dir = $dir.DIRECTORY_SEPARATOR.'lang'.DIRECTORY_SEPARATOR.$locale.DIRECTORY_SEPARATOR.'LC_MESSAGES'.DIRECTORY_SEPARATOR;
chdir($dir);
exec('msgfmt '.escapeshellarg($lang_dir.'update.po').' -o '.escapeshellarg($lang_dir.'update.mo'));
exec('msgfmt '.escapeshellarg($lang_dir.'site.po').' -o '.escapeshellarg($lang_dir.'site.mo'));
exec('msgfmt '.escapeshellarg($lang_dir.'customize.po').' -o '.escapeshellarg($lang_dir.'customize.mo'));
exec('msgfmt '.escapeshellarg($lang_dir.'update-legacy.po').' -o '.escapeshellarg($lang_dir.'update-legacy.mo'));
