<?php
header("Content-Type: application/json; charset=UTF-8");
header("X-Content-Type-Options: nosniff");

$res = array();
$res['res'] = $_GET['query'];

echo json_encode($res);
?>
