<?php
$menus = array();

$handle = @fopen("./config/menu.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {

		$menu = $buffer;
				
		if ( strlen($menu) > 2 ) { $menus[] = $menu; }

    }
    if (!feof($handle)) {
        echo "Fehler: unerwarteter fgets() Fehlschlag\n";
    }
    fclose($handle);
}

$cntMenu = count($menus);

$widthColumn = round(100 / $cntMenu);

echo '
<tr align=center bgcolor=#ffffff><td colspan=2> 
	<table border=0 width="940" ><tr align=center>
';

foreach($menus as $value)
{
	$lowValue = strtolower($value);
	echo "<td width=$widthColumn%><a href=\"index.php?site=$lowValue\">$value</a></td>";
}

?>

	</tr></table>
</td>
</tr>



<tr bgcolor=#ffffff>
	<td valign=top>	
	
<!-- ################################################## -->



<!-- ################################################## -->

