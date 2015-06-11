<?php
/**
 * Created by PhpStorm.
 * User: MIR
 * Date: 2015-06-11
 * Time: 1:17 PM
 */
require_once (__DIR__.'/../functions/sql.php');

function News_getAll()
{

    $sql='Select * from news';
    return sql_query($sql);

   /* return [
        ['title1'=>"aaa",'text'=>'uioio','author'=>'me'],
        ['title2'=>"aa2",'text'=>'uioidikhjdo','author'=>'me'],
        ['title3'=>"aaa",'text'=>'ujdhioio','author'=>'me'],
    ];*/
}