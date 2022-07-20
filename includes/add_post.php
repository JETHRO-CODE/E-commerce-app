<div class="form_container">
	<form method="POST" id="post_form" enctype="multipart/form-data">
		<div class="input_box">
			<label for="post_title">Post Title:</label>
			<input type="text" class="form_input" name="post_title" id="post_title" required>
		</div>
		<div class="input_box">
			<label for="post_category">Post Category:</label>
			<select class="form_input" name="post_category" id="post_category" required>
				<option value="">Select</option>
				<?php echo fetch_post_categories(); ?>
			</select>
		</div>
		<div class="input_box">
			<label for="author">Author:</label>
			<input type="text" class="form_input" name="author" id="author" required>
		</div>
		<div class="input_box">
			<label for="post_content">Post Content:</label>
			<textarea name="post_content" class="form_input summernote" id="post_content" cols="20" rows="15" required></textarea>
		</div>
		<div class="input_box">
			<label for="post_image">Post Image:</label>
			<small>Allowed: jpg, gif, png, JPEG</small>
			<input type="file" class="form_input" name="post_image" id="post_image" required>
		</div>
		
		<div class="input_box">
			<label for="post_tags">Post tags:</label>
			<input type="text" class="form_input" name="post_tags" id="post_tags" required>
		</div>
		
		<div class="input_box">
			<label for="post_status">Post Status:</label>
			<select class="form_input" name="post_status" id="post_status" required>
				<option value="">Select</option>
				<option value="Published">Published</option>
				<option value="Draft">Draft</option>
			</select>
		</div>
		
		<div class="input_box">
			<button type="submit" name="submit" id="post_button" class="form_button">Insert Post</button>
		</div>
	</form>
</div>