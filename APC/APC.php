<?php
/**
 * Created by PhpStorm.
 * User: hehanlin
 * Date: 2015/8/8
 * Time: 9:15
 */

//Alternative PHP Cache (APC) 是一个开放自由的PHP opcode 缓存。它的目标是提供一个自由、 开放，
//和健全的框架用于缓存和优化PHP的中间代码。
//在Windows上，APC需要一个临时目录，并且Web服务器对这个目录可写，APC会检测TMP,TEMP,USERPROFILE
//这些Windows的环境变量，如果这些都没有，会检查系统文件夹下的WINDOWS目录。
//PHP5.6为opcache，php.ini文件的后部
//如果opcache默认被静态预编译到了php中，则直接打开enabled = 1。
$a = "111";
apc_add("ap1",$a);
