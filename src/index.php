<?php

include('Garzone.php');
include('Caldaia.php');

$garzone = Garzone::fromString('Aurally-o');
$garzone->installaCaldaia();
