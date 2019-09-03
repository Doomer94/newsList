<div class="row">
	<div class="col">

		<form action="" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Заголовок:</label>
				<input type="text" name="title" value="<?php echo $data['title'] ?>" class="form-control" id="" aria-describedby="" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Алиас:</label>
				<input type="text" name="alias" value="<?php echo $data['url'] ?>" class="form-control" id="alias" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Дата создания/редактирования:</label>
				<input type="date" name="date" value="<?php echo $data['date'] ?>">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">*Краткий текст</label>
				<textarea name="short_post" class="form-control" id="" rows="3"><?php echo $data['short_post'] ?></textarea>
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">*Полный текст</label>
				<textarea name="post" class="form-control" id="" rows="6"><?php echo $data['post'] ?></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Сохранить</button>
		</form>
	</div>
</div>