<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" method="POST" class="ad-form form">
	<label for="title">Title</label>
	<input type="text" id="title" name="title" value="<?php if (isset ($post_title)) echo $post_title; ?>">

	<label for="ad">Ad</label>
	<textarea name="ad" id="ad"><?php if(isset($post_ad)) echo $post_ad; ?></textarea>

	<input type="submit" name="ad-btn" value="Post my ad!">

</form>