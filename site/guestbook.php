<?php include_once('header.php'); ?>

<form role="form">
<div class="form-group">
    <label for="guestbook-comment">have some ideas?make a comments!：</label>
    <input type="text" class="form-control" id="guestbook-comment" placeholder="Please make a comment">
</div>
<button id="submit-button" type="submit" class="btn btn-default">Submit</button>
</form>
<?php include_once('comments.php'); ?>
<?php include_once('footer.php'); ?>
<script>
$(document).ready(function() {
	load_comments();
	$('#submit-button').click(function(event) {
		event.preventDefault();
		$.post('logic/insert_comment.php', {
			'comment' : $('#guestbook-comment').val()
		}, function(result) {
			//alert(result);
			load_comments();
		});
	});
});

function load_comments()
{
	$('#comment-table').load('logic/get_comments.php');
}


</script>