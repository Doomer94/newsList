<div class="row">
	<div class="col">
		<div class="alert alert-warning" role="alert">
			* Заполните все поля
		</div>
		<form action="" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">*Заголовок:</label>
				<input type="text" name="title" class="form-control" id="title" aria-describedby="" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">*Алиас:</label>
				<input type="text" name="alias" class="form-control" id="alias" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">*Дата создания/редактирования:</label>
				<input type="date" name="date" value="<?php echo date("Y-m-d") ?>">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">*Краткий текст</label>
				<textarea name="short_post" class="form-control" id="" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">*Полный текст</label>
				<textarea name="post" class="form-control" id="" rows="6"></textarea>
			</div>
			<button type="submit" class="btn btn-primary" id="btn-submin">Создать</button>
		</form>
	</div>
</div>