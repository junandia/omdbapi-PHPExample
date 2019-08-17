<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= ($Title != null) ? $Title : 'Info Film' ; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<div id="container">
	<div>
		<!-- <?= form_open('Welcome/searching') ?> -->
		<form>
			<p align="right"><input type="text" name="search" class="form-control" placeholder="MASUKAN JUDUL FILMNYA DISINI"> </p>
			<p><input type="submit" value="Search" class="btn btn-lg btn-block btn-primary"></p>		
		<?= form_close() ?>
	</div>
	<h1><?= $Title ?> ( <?= $Year ?> ) - <?= $Genre ?></h1>
	<div id="body">
		<p>
			<table border="0" class="table">
				<tr>
					<td rowspan="10"><img src="<?= $Poster ?>"></td>
				</tr>
				<tr>
					<td>Runtime</td>
					<td><em>Runtime : <?= $Runtime ?></em></td>
				</tr>
				<tr>
					<td>Director</td>
					<td><?= $Director ?></td>
				</tr>
				<tr>
					<td>Writer</td>
					<td><?= $Writer ?></td>
				</tr>
				<tr>
					<td>Actors</td>
					<td><?= $Actors ?></td>
				</tr>
				<tr>
					<td>Plot</td>
					<td><?= $Plot ?></td>
				</tr>
				<tr>
					<td>Language</td>
					<td><?= $Language ?></td>
				</tr>
				<tr>
					<td>Imdb Rating</td>
					<td><?= $imdbRating ?></td>
				</tr>
			</table>			
		</p>

		<!--
		<p>Director</p>
		<code><?= $Director ?></code>

		<p>Writer</p>
		<code><?= $Writer ?></code>

		<p>Actors</p>
		<code><?= $Actors ?></code>

		<p>Plot</p>
		<code><?= $Plot ?></code>

		<p>Language</p>
		<code><?= $Language ?></code>

		<p>imdbRating : <?= $imdbRating ?></p>

	-->
	</div>

	<p class="footer">API By <a href="http://www.omdbapi.com/">OmDBApi</a> - Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>