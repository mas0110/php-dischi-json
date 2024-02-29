<?php

$string = file_get_contents("./src/data/dischi.json");

$list = json_decode($string, true);

header('content-Type: application/json');

echo json_encode($list);

?>