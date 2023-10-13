<?php

$disks_string = file_get_contents('disks.json');

$disks = json_decode($disks_string, true);

header('Content-Type: application/json');

echo json_encode($disks);
