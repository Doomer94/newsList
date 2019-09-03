<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Главная</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/a428dde836.js"></script>
		<script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			String.prototype.translit = String.prototype.translit || function () {
			var Chars = {
			'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'yo', 'ж': 'zh', 'з': 'z', 'и': 'i', 'й': 'y', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n', 'о': 'o', 'п': 'p', 'р': 'r', 'с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h', 'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'shch', 'ъ': '', 'ы': 'y', 'ь': '', 'э': 'e', 'ю': 'yu', 'я': 'ya', 'А': 'A', 'Б': 'B', 'В': 'V', 'Г': 'G', 'Д': 'D', 'Е': 'E', 'Ё': 'YO', 'Ж': 'ZH', 'З': 'Z', 'И': 'I', 'Й': 'Y', 'К': 'K', 'Л': 'L', 'М': 'M', 'Н': 'N', 'О': 'O', 'П': 'P', 'Р': 'R', 'С': 'S', 'Т': 'T', 'У': 'U', 'Ф': 'F', 'Х': 'H', 'Ц': 'C', 'Ч': 'CH', 'Ш': 'SH', 'Щ': 'SHCH', 'Ъ': '', 'Ы': 'Y', 'Ь': '', 'Э': 'E', 'Ю': 'YU', 'Я': 'YA', ' ': '-'
			},
			t = this;
			for (var i in Chars) { t = t.replace(new RegExp(i, 'g'), Chars[i]); }
			t = t.replace(/[!@#$%^&*+()\s]/g, '');
			return t;
			};
			$('#title').blur(function(){
				let a = $("#title").val();
				$('#alias').val(a.translit());
				
			});
			//console.log("транслитирировать nub oner строку".translit() );
		})
		</script>
	</head>
	<body>
		<nav class="navbar navbar-dark bg-dark mb-3">
			<div class="container">
				<a class="navbar-brand text-light" href="/news">Новости</a>
				<a class="btn btn-outline-light" href="/news/add">Добавить новость</a>
			</div>
		</nav>
		<div class="container">
			
			<?php include 'templates/'.$content_template; ?>
		</div>
	</body>
</html>