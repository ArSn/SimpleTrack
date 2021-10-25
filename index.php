<?php

namespace application;

use infrastructure\PDORepository;

include("Application/UserService.php");

date_default_timezone_set('Europe/Berlin');

echo "<p>Welcome to our awesome application.</p>";

echo "<p>It is now " . date("Y-m-d H:i:s") . "</p>";

$repository = new PDORepository();
$userService = new UserService($repository);

echo $userService->get($userId);



/*
$var = new config();
$var->init_database();
*/