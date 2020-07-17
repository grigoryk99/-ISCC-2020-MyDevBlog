if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['$post']);
	}
	$topics = getAllTopics();
<div class="full-post-div">
			<?php if ($post['published'] == false): ?>
				<h2 class="post-title"> ce message n'a pas été publié</h2>
			<?php else: ?>
				<h2 class="post-title"><?php echo $post['title']; ?></h2>
				<div class="post-body-div">
					<?php echo html_entity_decode($post['body']); ?>
                </div>
            