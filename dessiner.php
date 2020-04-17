<?php
require "db.php";
echo "<table>"."\n";
$grille = new Grille();

if ($_SESSION['colonne'] =! -1)
    $grille->addPoint($_SESSION['colonne']);

for ($i = 0; $i < 6; $i++) {
    echo "\t"."<tr>"."\n";
    for ($j = 0; $j < 7; $j++) {
        if ($grille->getPoint($i, $j) )
        echo "\t\t"."<td><button onclick=\"location.replace('addPoint.php?j=".$j."')\"></button></td>"."\n";
    }
    echo "\t"."</tr>"."\n";
}
echo "</table>"."\n";
?>