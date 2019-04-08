<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?=$data['judul']?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="<?= BASE_URL; ?>">PHP MVC</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="<?= BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= BASE_URL; ?>about">About</a>
					</li>
				</ul>
			</div>
		</nav>