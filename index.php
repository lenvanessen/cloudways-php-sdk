<?php
require "vendor/autoload.php";

use Cloudways\Varnish\Varnish;

$varnish = new Varnish();
$value['server_id'] = "59727";
$value['action'] = "enable";
$varnish->setEmail("Your Cloudways Email");
$varnish->setKey("Your API Key");
var_dump($varnish->serverVarnish($value));