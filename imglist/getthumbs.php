<?php

$handle = fopen("imglist.txt", "r");
$needle = "thumbs";
$folders = [];
$thumbs = [];

if ($handle) {
    while (($line = fgets($handle)) !== false) {
        if (strpos($line, $needle) !== false) {
            $parts = explode("/", $line);
            array_push($folders, $parts[1]);
            array_push($thumbs, $parts[2]);
        }
    }
    fclose($handle);
}

for ($i = 0; $i < sizeof($folders); $i++) {
    print('insert into thumb ("name","folder") values (`'.$folders[$i].'`,`'.$thumbs[$i].'`);'."\n");
}