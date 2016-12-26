<?php
$un = $_GET['un'];

$arr = array('zhangsan', 'lisi', 'wangwu');
echo in_array($un, $arr) ? 1 : 0;