<?php
/*
* Created by 
* Date: 2019-06-08
*Time: 16:11
*/
namespace DengTp5\exception;


class FileException extends BaseException
{
    public $code = 413;
    public $msg  = '文件体积过大';
    public $error_code = '60000';
}
