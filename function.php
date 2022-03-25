<?php

function content($m)
{
    $cek = trim($m);
    if($cek == "") { $file = "home.php"; }
    if($cek == "about") { $file = "about.php"; }
    if($cek == "international") { $file = "international.php"; }
    if($cek == "national") { $file = "national.php"; }
    return $file;
}
?>


