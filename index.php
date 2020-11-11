<?php

require './functions.php';

$page = explode('/', $_SERVER['REQUEST_URI'])[1];

display($page);
die;