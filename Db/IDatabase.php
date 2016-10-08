<?php
// PSR-0
namespace Db;
interface IDatabase{
    function connect();
    function query();
    function close();
}