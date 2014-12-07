<?php
namespace doit;
require 'vendor/autoload.php';
//doit\d::run();




D::route('/',function(){
	D::set('content',d::run());
	print new View('main.html');
});


D::run(); //тут include news.php, если открыто /news/


//$d = new d();
//print $d->get_system_version();
//print 2+2;
