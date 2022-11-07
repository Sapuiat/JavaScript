<?php

$server_seed = "c8197a717225a95d9bb7a797d4db1f6ff73950e0a59bb2d690a8acf715b331b4";
$public_seed = "a2e31a2afceff13467729237b1c2aa1c";
$round = "644954";
$hash = hash('sha256', $server_seed . "-" . $public_seed . "-" . $round);
$roll = hexdec(substr($hash, 0, 8)) % 15;

echo("Roll: $roll");