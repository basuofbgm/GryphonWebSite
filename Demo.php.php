<?php

define('DB_NAME', 'gryphonsystem');

define('DB_USER', 'root');

define('DB_PASSWORD', 'admin');

define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link)
 {

     die('Could not connect: ' . mysql_error());
   
 }
$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) 
{

     die('Can\'t use ' . DB_NAME . ': ' . mysql_error());

}
$value1 = $_POST['FullName'];

$value2 = $_POST['PhoneNumber'];

$value3 = $_POST['EmailID'];
$value4 = $_POST['Message'];
$sql = "INSERT INTO gryphonsystem.contactus(FullName, PhoneNumber, EmailID,Message ) VALUES ('$value1', '$value2', '$value3','$value4')";
$result = mysql_query($sql);
mysql_close();

/>