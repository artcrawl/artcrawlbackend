<?
date_default_timezone_set('America/Toronto');
header('Content-Type: application/json');
include "connect.php";
include "forminput.php";
include "braintree/lib/Braintree.php";
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('yy8m4yp4jgv2js52');
Braintree_Configuration::publicKey('yrb29tb3vd8tnjjv');
Braintree_Configuration::privateKey('5a756e51ce823736dcfd471ac44dfb7d');