<?php
$id = isset($_GET['id']) && is_numeric($_GET['id'])? $_GET['id']: NULL;

if (isset($_POST['ad-btn'])) {
	$post_title = mysqli_real_escape_string($conn, trim($_POST['title']));
	$post_ad = mysqli_real_escape_string($conn, trim($_POST['ad']));

	// add validation!!!!!
    // prepared statement would be better
	if ($post_ad && $post_title) {
		
		if (isset($id)) {
			$sql = "UPDATE for_sale SET title = '$post_title', ad = '$post_ad' WHERE ad_id = $id";
		} else {
			$sql = "INSERT into for_sale (title, ad, u_id) VALUES ('$post_title','$post_ad', '".$_SESSION['user_id']."')";	
		}				
		

		if ($conn->query($sql)) {
			$message = "<p>Success!</p>";
			$post_ad = $post_title = "";
		} else {
			$message = "<p>There was a problem. $conn->error</p>";
		}
	} else { $message = "<p>All fields are required.</p>"; }
}
?>