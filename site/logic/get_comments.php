<table class="table">
<?php load_comments(); ?>
</table>

<?php 

function load_comments()
{
	require_once('db.php');
	$results = get_all_sqlCommand('select * from comments');
	echo "<table class=\"table\"> <tr><th>ID</th><th>Comments</th></tr>";
	foreach($results as $val)
	{
		$id = $val['id'];
		$comment = $val['comment'];
		echo <<<EOS
<tr>
<td>
$id
</td>
<td>
$comment
</td>
</tr>
EOS;
	}
}
?>
