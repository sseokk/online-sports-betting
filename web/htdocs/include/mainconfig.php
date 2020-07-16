<?php
$config['baseurl'] = '';
$config['basedir'] = '/var/www/htdocs';

$config['private_key'] = 'your-private-key';
$config['public_key'] = rand(10000, 50000);
$config['noreply_email'] = 'noreply@sportsbet.com';

$config['site name'] = 'BET';
$config['time zone'] = 'Asia/Seoul';
$config['default language'] = 'en';

// connect to database
$DBhost="bet-mysql";
$DBuser="sportsbet";
$DBpass="sportsbetpwd";

//$DBuser="dbmanager";
//$DBpass="smarttech";
mysql_connect($DBhost,$DBuser,$DBpass);
mysql_select_db('sportsbet');
mysql_query("SET NAMES 'utf8'");
?>
