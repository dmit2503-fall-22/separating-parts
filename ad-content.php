	<?php 
	$list_sql = "SELECT ad_id, title, ad, date_posted, u_id, item_sold_yn	 from for_sale WHERE item_sold_yn	 = 'N'";
	// echo $list_sql;
	$list_result= $conn->query($list_sql); 
	echo $conn->error;?>
	<?php if ($list_result->num_rows > 0): ?>
		<div class="ads">
			<?php while($row = $list_result->fetch_assoc()): ?>			
				<?php extract($row); ?>
				<div>
					<h3><?php echo $title; ?></h3>
					<p>Posted on <?php echo date("M d, Y g:i a", strtotime($date_posted) ) ?> </p>
					<p><?php echo $ad; ?></p>

					<?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $u_id): ?>
						<a href="index.php?id=<?php echo $ad_id; ?>">Edit</a>
						<?php if ($item_sold_yn	 == 'N'): ?>
							<a href="mark-ad-sold.php?id=<?php echo $ad_id; ?>">Mark Sold</a>
						<?php endif ?>
					<?php endif ?>
				</div>
			<?php endwhile ?>			
		</div>
	<?php endif ?>