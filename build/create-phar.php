<?php
$srcRoot = "../src";
$buildRoot = "../build";
 
$phar = new Phar($buildRoot . "/build.phar", FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, "build.phar");

$phar->buildFromDirectory($srcRoot);
$phar->setStub($phar->createDefaultStub("index.php"));

//To copy config.ini
//copy($srcRoot . "/config.ini", $buildRoot . "/config.ini");