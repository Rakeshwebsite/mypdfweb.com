<?php
if (isset($_GET['file_name'])) {
    $name = $_GET['file_name'];
    echo "$name";
    // fetch file to download from database

header("Content-Type: application/octet-stream");

$file ='uploads/'.$name;
header("Content-Disposition: attachment; filename=" . urlencode($file));   
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Description: File Transfer");            
header("Content-Length: " . filesize($file));
flush(); // this doesn't really matter.
$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush(); // this is essential for large downloads
} 
fclose($fp);
} 
?>