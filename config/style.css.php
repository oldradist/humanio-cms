<?php	
	header('Content-type: text/css');
	$background = "#ffffff";
	$color = "#000000";
	$lines = "#ddbb85";	
	$border = "black 0px solid";	
	$fontfamily = "Verdana,Arial,sans-serif";
	
	$mainImage = "../images/news.jpg";    /*"../images/eagle_01.jpg";*/
	
    $size = getimagesize( $mainImage);
    $mainWidth = $size[0];
    $mainHeight = $size[1];
	
	$leftBlockBorder = "#ddbb85";
	$rightBlockBorder = "#ddbb85";
	

?>


h1 {
    color: <?=$color?>;
    background-color: <?=$background?>;
}

hr {
    color: <?=$lines?>;
}

table {
	border: <?=$border?>;
}

tr {
	border: <?=$border?>;
}

td {
	border: <?=$border?>;
	font-family: <?=$fontfamily?>;
}

td a { display:block; width:100%; text-decoration: none; color: black;}

.img-main {
  background: url("<?=$mainImage?>");
  width: <?=$mainWidth?>;
  height: <?=$mainHeight?>;	
  align: center;
}

.lblock { 
width: 600px;
font-family: <?=$fontfamily?>; 
font-size: 14px; 
background-color: <?=$background?>;
color: <?=$color?>; 
padding: 20px; 
margin-top: 40px;
margin-bottom: 40px;
margin-left: 30px;
margin-right: 100px; 
line-height: 18px; 
border: <?=$leftBlockBorder?> 2px solid; 
}

.rblock { 
width: 600px;
font-family: <?=$fontfamily?>;  
font-size: 14px; 
background-color: <?=$background?>; 
color: <?=$color?>; 
padding: 20px; 
margin-top: 40px;
margin-bottom: 40px;
margin-left: 100px;
margin-right: 20px; 
line-height: 18px; 
border: <?=$rightBlockBorder?> 2px solid; 
}

.placeholder { 
width: 600px;
font-family: <?=$fontfamily?>;  
font-size: 14px; 
background-color: <?=$background?>; 
color: <?=$color?>; 
padding: 20px; 
margin-top: 40px;
margin-bottom: 40px;
margin-left: 100px;
margin-right: 20px; 
line-height: 18px; 
border: <?=$rightBlockBorder?> 0px solid; 
}

.service { 
color: <?=$lines?>;
}

#trennlinie {
color: <?=$lines?>;
 }
