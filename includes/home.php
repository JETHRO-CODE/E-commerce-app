<div class="home_container">
<?php 
	if(mysqli_num_rows($select_admin) > 0)
	{
?>
	<a href="dashboard.php?file=users.php&title=users">
		<div class="content_box box_blue">
			<i class="fas fa-users"></i>
			<p>Users</p>
		</div>
	</a>
	
	<a href="dashboard.php?file=view_post.php&title=posts">
		<div class="content_box box_darkred">
			<i class="fab fa-telegram-plane"></i>
			<p>Posts</p>
		</div>
	</a>
	
	<a href="dashboard.php?file=view_product.php&title=products">
		<div class="content_box box_green">
			<i class="fas fa-shopping-cart"></i>
			<p>Products</p>
		</div>
	</a>
	
	<a href="dashboard.php?file=comments.php&title=comments">
		<div class="content_box box_orange">
			<i class="fas fa-comment"></i>
			<p>Comments</p>
		</div>
	</a>
<?php
}
?>	
	<a href="dashboard.php?file=tutorials.php&title=tutorials">	
		<div class="content_box box_red">
			<i class="fas fa-video"></i>
			<p>Tutorials</p>
		</div>
	</a>
	
	<a href="dashboard.php?file=profile.php&title=profile">	
		<div class="content_box box_blue">
			<i class="fas fa-user"></i>
			<p>Profile</p>
		</div>
	</a>
	
</div>