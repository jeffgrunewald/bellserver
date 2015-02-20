<?php
    $sound = $_POST['sound'].".wav";
    $origin = $_POST['origin'].".html";
    $output = exec("aplay ../sounds/".$sound);
    echo "$output";

    header("Location: ../".$origin);
?>
