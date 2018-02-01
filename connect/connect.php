<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

$mysqli = mysqli_connect("localhost", "root", "", "db_app");
//$mysqli = mysqli_connect("localhost", "id3598830_habaoanh", "binh09834060200", "id3598830_db_app");
$mysqli->set_charset("utf8");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>