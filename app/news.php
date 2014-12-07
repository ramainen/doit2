<?php

namespace doit;

d::route('index',function(){
	print new View('index.html');
});


d::route('',function(){
	print new View('show.html');
});