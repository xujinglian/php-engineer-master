<?php

namespace kj1;
function getmsg(){
	echo "123";
}


class school{
	public $obj="dog";
}


namespace kj2;
function getmsg(){
	echo "456";
}


class school{
	public $obj="pig";
}


\kj2\getmsg();
