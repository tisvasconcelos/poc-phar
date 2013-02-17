<?php
require_once "common.php";
$config = parse_ini_file("config.ini");
AppManager::run($config);