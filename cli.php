#!/usr/bin/env php
<?php

date_default_timezone_set('Europe/Budapest');

require_once('includes.php');


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use App\Controller\MenuController;



$obj  = new MenuController($argv);
