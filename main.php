<?php

require __DIR__ . "/Hello.php";

require __DIR__ . "/vendor/autoload.php";
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 6/10/15
 * Time: 19:33
 */
$greetings = new Hello();

$greetings->sayHello();