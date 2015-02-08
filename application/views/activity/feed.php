<div class="activity activity-feed">

	<img class="author-image" src="<?php echo $image ?>">
	<div class="content">
		<span class="author-title <?php echo (!empty($subtitle))?'premium':'' ?>"><a href="<?php echo $authorLink ?>"><?php echo $author ?></a></span>
		<?php if(!empty($subtitle)): ?>
			<span class="author-subtitle"><?php echo $subtitle ?></span>
		<?php endif ?>
		<span class="activity-date date">den <?php echo $date ?></span>

		<p><?php echo $content ?></p>

		<?php if(!empty($youtube)): ?>
			<div class="video-player" data-id="<?php echo $youtube ?>">
				<div class="video-player-placeholder" style="background-image: url('<?php echo $youtubeImage; ?>')"></div>
				<div class="video-player-button-play"></div>
				<div id="youtube<?php echo $youtube ?>"></div>
			</div>
		<?php endif ?>

		<div class="toolbar">
			<?php if(count($comments) == 0): ?>
				<a href="#comment" class="link activity-comment-link">Kommentera</a>
			<?php else: ?>
				<a href="#comment" class="link activity-comment-link"><?php echo count($comments) ?> kommentarer</a>
			<?php endif ?>
			<?php if($isLoggedInUser): ?>
				<a href="#remove" class="link activity-remove-link right">Ta bort</a>
			<?php endif ?>
		</div>
	</div>
	<ul class="activity-comments">
		<?php foreach($comments as $comment): ?>
			<?php _view('activity.comment', array('comment' => $comment)) ?>
		<?php endforeach ?>
	</ul>
	<?php _view('activity.commentform', array('activityId' => $activityId)) ?>
</div>
