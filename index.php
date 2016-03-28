<?php
require_once './php_fn.php';
loadClass('./', array('index', 'login'));
$myTest = new myTest();
echo $myTest->index();