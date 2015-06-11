<?php
/**
 * Created by PhpStorm.
 * User: MIR
 * Date: 2015-06-11
 * Time: 3:49 PM
 */
function sql_connect(){
    mysql_connect('localhost','root','noname');
    mysql_select_db('zodchii');
}
function sql_query($sql){

    sql_connect();
    $res=mysql_query($sql);

    $ret=[];

    while(false!==$row=mysql_fetch_assoc($res))
    {
        $ret[]=$row;
    }

    return $ret;
}