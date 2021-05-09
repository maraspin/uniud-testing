<?php

include('Garzone.php');
include('Caldaia.php');

$garzone = Garzone::fromString('Aurally-o');
$caldaia = new Caldaia();
$garzone->installaCaldaia($caldaia);
