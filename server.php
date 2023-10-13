<?php

$disks_string = file_get_contents('disks.json');

$disks = json_decode($disks_string, true);


var_dump($disks);
