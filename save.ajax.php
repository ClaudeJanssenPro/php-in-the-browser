<?php
$folder = 'saves';
if ($_POST['code']) {
    $filename = $folder.'/'. time().'.txt';
    $handle = fopen($filename, 'w');
    $result = fwrite($handle, urldecode($_POST['code']));
    fclose($handle);
    if ($result === false) {
        echo 'Code could NOT be saved !';
    } else {
        echo 'file saved under name: ' . $filename;
    }
}

?>