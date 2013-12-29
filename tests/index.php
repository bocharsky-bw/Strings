<?php
/*** String class ***/
require_once __DIR__ .'/../String.php';
use BW\Strings\String;

function newln() {
    return "<br>". PHP_EOL;
}

/* Sting initialization */
// Quick initialization classic objects
$str = new String(' Hello World!  '); 
// Or quick initialization by calling static method init() for better usability for following quick access to object methods
$otherStr = String::init(' Hello World!  ');
// For following quick access to object methods in PHP 5.4 able to use 
//new String('Hello World!'))->toLower();

/* Return by value */ 
print 'String after initialization: $str = '. $str . newln();
$strCopy = $str->toLower()->trim(); // Any manipulations with $str string given new String object
print 'Trimmed and lowercase copy of $str string is: $strCopy = '. $strCopy . newln();
print 'First $str string after copy operation is still: $str = '. $str . newln();

/* String operations */
// Trimmed
$str = $str->trim();
print 'Trimmed string at both sides: $str = '. $str . newln();
// and other operations...

newln();

print $str->hash('gost');