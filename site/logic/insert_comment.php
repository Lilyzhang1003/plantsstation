<?php
require_once('db.php');
$comment = $_POST['comment']; 
$ret = execute_sqlCommand("insert into comments (id, comment) VALUES (NULL, '$comment');");/*�����ݿ����Զ����һ������*/

?>