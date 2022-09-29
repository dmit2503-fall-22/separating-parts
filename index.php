<?php 
$page_title = "Home";
session_start();

require("includes/connect.php");
include ("includes/messages.php");
include("session-time-check.php");
include ("login-post.php");
include ("register-post.php");
include ("ad-post.php");

?>
<?php require("includes/header.php"); ?>
<div>
	<?php include ("ad-content.php"); ?>
</div>
<div>
	<?php if (isset($message)): ?>
		<div class="message">
			<?php echo $message; ?>
		</div>
	<?php endif ?>	
	<?php if (isset($_SESSION['topic-8-2-var'])): ?>
		<?php include ("ad-form.php"); ?>	
	<?php else: ?>
		<div class="flex">
			<?php include ("login-form.php"); ?>	
			OR
			<?php include ("register-form.php"); ?>	
		</div>
	<?php endif ?>
</div>
 <?php require("includes/footer.php"); ?>