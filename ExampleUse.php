<?php

require('RealFollowersPlus.php');

$username = "ndes71";

$a = new RealFollowersPlus($username);

$auth = $a->auth();
echo "Current Coin : " . $auth['object']['cash']['deposit']  . "\n";
$a->miningMe();
echo "Coin after mining : " . $a->getCoin();
