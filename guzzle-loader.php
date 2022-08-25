<?php
    /*
    Plugin Name: Guzzle Loader
    Plugin URI: makedev.com.au
    Description: Load Guzzle library (and a few helpers)
    Author: makeweb.com.au
    Author URI: makedev.com.au
    Version: 1.0.0
    */

    if (!defined("ABSPATH")) {  exit; }
    include __DIR__ . "/vendor/autoload.php";

    ////////////////////////// UPDATES //////////////////////////
    $updater = new makeUpdate( "2088", "teg!xkz4QFZ*wyc6wcg",  __FILE__);