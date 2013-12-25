<?php

use BW\Strings;

//print (new String('Hello World!'))->toLower();
//print String::init(' Hello World!  ')->toLower()->trim()->replace('!', '!!!');
$str = String::init(' Hello World!  ');
print $str;
$newStr = $str->toLower()->trim();
print $str;