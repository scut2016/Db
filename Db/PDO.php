<?php
/**
 * 文件名：PDO.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/8.13:38
 */

namespace Db;
class PDO implements IDatabase
{
    function connect()
    {
       echo "connect";
    }

    function query()
    {
       echo "query";
    }

    function close()
    {
       echo "close";
    }

}