<?php

include ("./config/globals.php");

include("./includes/header.php");

include("./includes/navigation.php");

$query = $_SERVER["QUERY_STRING"];

$site = 'home';

parse_str($query);

$base = $site;	

if ( strlen($base) == 0 ) { $base = "home"; }	

$left = 'lblock';
$right = 'rblock';
$position = '';

$verz = dir ( './texte' );

//##################

if(is_dir("./texte/$base"))
{}
else{mkdir("./texte/$base", 0700);}

$files = scandir("./texte/$base", $blog);
$blocks = [];

//echo "<div  class=placeholder>";
//include("texte/placeholder.txt");
//echo "</div>";


foreach ($files as $entry)
{

	if ( (substr($entry, -3) === 'txt') && (substr($entry, 0, 4) === (substr($base, 0, 4))) )
	{
		if ( strlen($position) == 0 )
		{
			$position = $left;
		}
		elseif ( substr($position, 0, 1) == 'l' )
		{
			$position = $right;
		}
		elseif ( substr($position, 0, 1) == 'r' )
		{
			$position = $left;
		}
		else
		{
			$position = $left;
		}
		
		echo "<div  class=$position>";
		include("texte/$base/$entry");
		echo "</div>";
		
		array_push($blocks, 1);

	}	
} 

echo "<div  class=placeholder>";
include("texte/placeholder.txt");
echo "</div>";


$verz->close ();

include("./includes/service.php");

include("./includes/footer.php");
?>