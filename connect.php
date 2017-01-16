<?php
    require_once('config.php');
    //连库
//    if(!($con = mysqli_connect(HOST,USERNAME,PASSWORD))){
//        echo mysql_error();
//    }
//    //选库
//    if(!mysqli_select_db('info')){
//        echo mysql_error();
//    }
//    //字符集
//    if(!mysql_query('set names utf8')){
//        echo mysql_error();
//    }

$con = mysqli_connect('localhost','root','qwer7890!@#');
mysqli_select_db($con,'info');
mysqli_query($con,"set names utf8");
mysqli_query($con,"set character_set_client=utf8");
mysqli_query($con,"set character_set_results=utf8");