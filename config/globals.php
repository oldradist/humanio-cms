<?php

	$mainName = "Wahre Info";
	
	$mainImage = "./images/news.jpg"; 
	$imageScaling = 0.8;
	
	$blog = 1;		// Newest article on the top. For another order set zero.
	
	$size = getimagesize( $mainImage);
    $mainWidth = $size[0] * $imageScaling;
    $mainHeight = $size[1] * $imageScaling;

?> 


