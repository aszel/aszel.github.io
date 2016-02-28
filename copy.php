<?php

$linkStart = "<a href='";
$linkClose = "'>";
$linkEnd = "</a>";
$lineBreak = "<br>";

$handle = fopen("list-sorted.txt", "r");
$content = "";

if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $newLine = $linkStart.$line.$linkClose.$line.$linkEnd.$lineBreak;
        print($newLine);
    }
    fclose($handle);
}