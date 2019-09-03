<div class="row">
	<?php for ($i=count($data)-1; 0 <= $i ; $i--) { ?>
	<div class="col-md-12 mb-3">
		<div class="card">
			<div class="card-body">
				
				<h2 class="card-title"><?php echo $data[$i]['title'] ?></h2>
				<small class="text-muted">Дата создания/редактирования: <?php echo $data[$i]['date'] ?></small>
				<p class="card-text"><?php echo $data[$i]['short_post'] ?></p>
				<form method="POST" action="" style="display: inline-block;">
					<button class="btn btn-primary"><i class="far fa-trash-alt"></i></button>
					<input type="hidden" name="delNews" value="<?php echo $data[$i]['id'] ?>" />
				</form>
				<a href="news/edit-<?php echo $data[$i]['id'] ?>" class="btn btn-primary"><i class="fas fa-cog"></i></a>
				<a href="<?php echo 'news/'.$data[$i]['url'] ?>" class="btn btn-primary">Читать дальше >></a>
			</div>
		</div>
	</div>
	<?php };?>
</div>