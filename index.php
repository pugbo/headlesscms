<?php
require_once('./vendor/autoload.php');

$f3 = \Base::instance();

$f3->route('GET /page/@id', function($f3, $params){
    echo '<h2>id:'.$params['id'].'</h2>';
});

$f3->route('GET /', function(){
    echo "<h1>index</h1>";
});

$f3->run();