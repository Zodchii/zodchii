<?php
/**
 * Created by PhpStorm.
 * User: MIR
 * Date: 2015-06-11
 * Time: 12:41 AM
 */
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/models/news.php');
$news=News_getAll();

include_once(__DIR__ . '/view/news.php');