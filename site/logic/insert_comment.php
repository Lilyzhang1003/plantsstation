<?php
require_once('db.php');
$comment = $_POST['comment']; 
$ret = execute_sqlCommand("insert into comments (id, comment) VALUES (NULL, '$comment');");/*向数据库中自动添加一条评论*/

?>