<?php


function connect_database()
{
$dbhost = 'localhost';
$dbuser = 'zhanglili';
$dbpass = 'zhanglili';
$dbname = 'zhiwuxiaozhan';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if (! $conn)
	{
		die("Could not connect: ".mysql_error());
	}
	return $conn;
}

function get_through_sqlCommand($sql)
{
$dbhost = 'localhost';
$dbuser = 'zhanglili';
$dbpass = 'zhanglili';
$dbname = 'zhiwuxiaozhan';
	$conn=connect_database();
	
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	if(!$retval)
	{
		return 0;
		//die('Could not get data : '.mysql_error());
	}
	$row = mysql_fetch_assoc($retval);
	
	mysql_free_result($retval);
	
	
	mysql_close($conn);
	
	return $row;
}

function get_all_sqlCommand($sql)
{
$dbhost = 'localhost';
$dbuser = 'zhanglili';
$dbpass = 'zhanglili';
$dbname = 'zhiwuxiaozhan';
	$conn = connect_database();
	
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);	
	if(!$retval)
	{
		return 0;
		//die('Could not get data : '.mysql_error());
	}
	$i=0;
	while($row = mysql_fetch_assoc($retval))
	{
		$res_array[$i]=$row;
		$i++;
	}
	
	mysql_free_result($retval);
	
	
	mysql_close($conn);
	return $res_array;
	
}
function execute_sqlCommand($sql)
{
$dbhost = 'localhost';
$dbuser = 'zhanglili';
$dbpass = 'zhanglili';
$dbname = 'zhiwuxiaozhan';
	$conn=connect_database();
	
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	
	if(!$retval)
	{
		return 0;
		//die(mysql_error());
	}
	
	
	mysql_close($conn);
	return 1;
}



?>