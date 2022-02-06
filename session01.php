<?php
// SESSIONスタート

session_start();

// SESSIONのidを取得
$sid =session_id();

echo $sid;

//session変数
$_SESSION ['name']='mtm';
$_SESSION ['age']=37;
$_SESSION ['from']='Tokyo';

?>