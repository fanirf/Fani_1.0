<?php 
$conn=mysql_connect('localhost','root','') or die('connection error :'.mysql_errno());
   $db='clientes';
   if(mysql_select_db($db,$conn))
   {
	   //echo"$db connection succesful";
	   }
	else
	{
		echo mysql_error();
		}   
?>