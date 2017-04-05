<?php
/**
 * Created by PhpStorm.
 * User: DaiYan
 * Date: 2017/4/5
 * Time: 17:24
 */

$str=<<<eof

 * Created by PhpStorm.
 * User: DaiYan
 * Date: 2017/4/5
 * Time: 17:24
 */

eof;

debug_print_backtrace(1);
var_dump(zend_version());

var_dump($str);

