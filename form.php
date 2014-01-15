<?php


$COMM_NAAM = $_POST['COMM_NAAM'];
$COMM_PLAATS = $_POST['COMM_PLAATS'];
$COMM_CONT = $_POST['COMM_CONT'];
$COMM_MAIL = $_POST['COMM_MAIL'];
$COMM_TEL = $_POST['COMM_TEL'];


$CORP_NAAM = $_POST['CORP_NAAM'];
$CORP_CONT = $_POST['CORP_CONT'];
$CORP_MAIL = $_POST['CORP_MAIL'];
$CORP_TEL = $_POST['CORP_TEL'];

$GEM_NAAM = $_POST['GEM_NAAM'];
$GEM_CONT = $_POST['GEM_CONT'];
$GEM_MAIL = $_POST['GEM_MAIL'];
$GEM_TEL = $_POST['GEM_TEL'];

$TIME = $_POST['date'] . ' ' . $_POST['time'];
$TIME = mysql_real_escape_string($TIME);
$TIME = strtotime($TIME);
$TIME = date('Y-m-d H:i:s',$TIME);

$username = "buurtfabriek";
$password = "badGurlEc8";
$database = "woontevreden_nl_1";
mysql_connect('buurtf1.sql.greenhost.nl',$username,$password) or die( "Unable to connect");
@mysql_select_db($database);

mysql_query("INSERT INTO `CONTACTS`(`COMM_NAAM`,`COMM_PLAATS`,`COMM_CONT`,`COMM_MAIL`,`COMM_TEL`,`CORP_NAAM`,`CORP_CONT`,`CORP_MAIL`,`CORP_TEL`,`GEM_NAAM`,`GEM_CONT`,`GEM_MAIL`,`GEM_TEL`,`TIME`) VALUES ('$COMM_NAAM','$COMM_PLAATS','$COMM_CONT','$COMM_MAIL','$COMM_TEL','$CORP_NAAM','$CORP_CONT','$CORP_MAIL','$CORP_TEL','$GEM_NAAM','$GEM_CONT','$GEM_MAIL','$GEM_TEL','$TIME')");
mysql_close();

header('Location: http://woontevreden.nl/bedankt.html');
?>