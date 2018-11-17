<!DOCTYPE html>
<html>
	<head>
		<title>SVM - Etiquetage manuel de Profils Twitter</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css"> 
		<meta charset="UTF-8">		
		<meta name="description" content="Twitter's profile manual classification">
		<meta name="keywords" content="SVM, Twitter, classification, datamining">
		<meta name="author" content="Helia Cerbonne, Quentin Villecroze">
	</head>
	<body>
		<header class="container-fluid">
			<nav>
				<ul class="row">
					<li class="col">Profile list</li>
					<li class="col">Cat 1 list</li>
					<li class="col">Cat 2 list</li>
					<li class="col">Unasigned list</li>
				</ul>
			</nav>
		</header>
		<section class="container-fluid row">
			<div class="col-12 col-md-6 col-lg-4 p-4"><article class="card p-0">
				<header class="card-header">
					<h4 class="card-title">Tweetname</h4>
					<h5 class="card-subtitle text-muted">@pseudo</h5>
				</header>
				<div class="card-body">
					<p>Biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography </p>
					<p><img src="localisation.png" />Localisation</p>
					<p><img src="link.png" class="link" /><a href="/">website</a></p>
					<ul class="row">
						<li class="col">Followings</li>
						<li class="col">Followers</li>
					</ul>
				</div>
				<footer class="card-footer btn-group d-flex btn-group-toggle p-0" data-toggle="buttons">
					<label class="btn w-100 btn-outline-info">
						<input type="radio" name="pseudo" autocomplete="off" value="cat1"/> Cat 1
					</label>
					<label class="btn w-100 btn-outline-success">
						<input type="radio" name="pseudo" autocomplete="off" value="cat2"/> Cat 2
					</label>
					<!--div class="col">
						<input type="radio" id="pseudo_cat1" name="pseudo" value="cat1" />
						<label for="cat1" class="btn btn-secondary">Cat 1</label>
					</div>
					<div class="col">
						<input type="radio" id="pseudo_cat2" name="pseudo" value="cat2" />
						<label for="cat2" class="btn btn-secondary">Cat 2</label>
					</div-->
				</footer>
			</article></div>
			<div class="col-12 col-md-6 col-lg-4 p-4"><article class="card p-0">
				<header class="card-header">
					<h4 class="card-title">Tweetname</h4>
					<h5 class="card-subtitle text-muted">@pseudo</h5>
				</header>
				<div class="card-body">
					<p>Biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography </p>
					<p><img src="localisation.png" />Localisation</p>
					<p><img src="link.png" class="link" /><a href="/">website</a></p>
					<ul class="row">
						<li class="col">Followings</li>
						<li class="col">Followers</li>
					</ul>
				</div>
				<footer class="card-footer btn-group d-flex btn-group-toggle p-0" data-toggle="buttons">
					<label class="btn w-100 btn-outline-info">
						<input type="radio" name="pseudo" autocomplete="off" value="cat1"/> Cat 1
					</label>
					<label class="btn w-100 btn-outline-success">
						<input type="radio" name="pseudo" autocomplete="off" value="cat2"/> Cat 2
					</label>
					<!--div class="col">
						<input type="radio" id="pseudo_cat1" name="pseudo" value="cat1" />
						<label for="cat1" class="btn btn-secondary">Cat 1</label>
					</div>
					<div class="col">
						<input type="radio" id="pseudo_cat2" name="pseudo" value="cat2" />
						<label for="cat2" class="btn btn-secondary">Cat 2</label>
					</div-->
				</footer>
			</article></div>
			<div class="col-12 col-md-6 col-lg-4 p-4"><article class="card p-0">
				<header class="card-header">
					<h4 class="card-title">Tweetname</h4>
					<h5 class="card-subtitle text-muted">@pseudo</h5>
				</header>
				<div class="card-body">
					<p>Biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography </p>
					<p><img src="localisation.png" />Localisation</p>
					<p><img src="link.png" class="link" /><a href="/">website</a></p>
					<ul class="row">
						<li class="col">Followings</li>
						<li class="col">Followers</li>
					</ul>
				</div>
				<footer class="card-footer btn-group d-flex btn-group-toggle p-0" data-toggle="buttons">
					<label class="btn w-100 btn-outline-info">
						<input type="radio" name="pseudo" autocomplete="off" value="cat1"/> Cat 1
					</label>
					<label class="btn w-100 btn-outline-success">
						<input type="radio" name="pseudo" autocomplete="off" value="cat2"/> Cat 2
					</label>
					<!--div class="col">
						<input type="radio" id="pseudo_cat1" name="pseudo" value="cat1" />
						<label for="cat1" class="btn btn-secondary">Cat 1</label>
					</div>
					<div class="col">
						<input type="radio" id="pseudo_cat2" name="pseudo" value="cat2" />
						<label for="cat2" class="btn btn-secondary">Cat 2</label>
					</div-->
				</footer>
			</article></div>
			<div class="col-12 col-md-6 col-lg-4 p-4"><article class="card p-0">
				<header class="card-header">
					<h4 class="card-title">Tweetname</h4>
					<h5 class="card-subtitle text-muted">@pseudo</h5>
				</header>
				<div class="card-body">
					<p>Biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography </p>
					<p><img src="localisation.png" />Localisation</p>
					<p><img src="link.png" class="link" /><a href="/">website</a></p>
					<ul class="row">
						<li class="col">Followings</li>
						<li class="col">Followers</li>
					</ul>
				</div>
				<footer class="card-footer btn-group d-flex btn-group-toggle p-0" data-toggle="buttons">
					<label class="btn w-100 btn-outline-info">
						<input type="radio" name="pseudo" autocomplete="off" value="cat1"/> Cat 1
					</label>
					<label class="btn w-100 btn-outline-success">
						<input type="radio" name="pseudo" autocomplete="off" value="cat2"/> Cat 2
					</label>
					<!--div class="col">
						<input type="radio" id="pseudo_cat1" name="pseudo" value="cat1" />
						<label for="cat1" class="btn btn-secondary">Cat 1</label>
					</div>
					<div class="col">
						<input type="radio" id="pseudo_cat2" name="pseudo" value="cat2" />
						<label for="cat2" class="btn btn-secondary">Cat 2</label>
					</div-->
				</footer>
			</article></div>
			<div class="col-12 col-md-6 col-lg-4 p-4"><article class="card p-0">
				<header class="card-header">
					<h4 class="card-title">Tweetname</h4>
					<h5 class="card-subtitle text-muted">@pseudo</h5>
				</header>
				<div class="card-body">
					<p>Biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography </p>
					<p><img src="localisation.png" />Localisation</p>
					<p><img src="link.png" class="link" /><a href="/">website</a></p>
					<ul class="row">
						<li class="col">Followings</li>
						<li class="col">Followers</li>
					</ul>
				</div>
				<footer class="card-footer btn-group d-flex btn-group-toggle p-0" data-toggle="buttons">
					<label class="btn w-100 btn-outline-info">
						<input type="radio" name="pseudo" autocomplete="off" value="cat1"/> Cat 1
					</label>
					<label class="btn w-100 btn-outline-success">
						<input type="radio" name="pseudo" autocomplete="off" value="cat2"/> Cat 2
					</label>
					<!--div class="col">
						<input type="radio" id="pseudo_cat1" name="pseudo" value="cat1" />
						<label for="cat1" class="btn btn-secondary">Cat 1</label>
					</div>
					<div class="col">
						<input type="radio" id="pseudo_cat2" name="pseudo" value="cat2" />
						<label for="cat2" class="btn btn-secondary">Cat 2</label>
					</div-->
				</footer>
			</article></div>
			<div class="col-12 col-md-6 col-lg-4 p-4"><article class="card p-0">
				<header class="card-header">
					<h4 class="card-title">Tweetname</h4>
					<h5 class="card-subtitle text-muted">@pseudo</h5>
				</header>
				<div class="card-body">
					<p>Biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography biography </p>
					<p><img src="localisation.png" />Localisation</p>
					<p><img src="link.png" class="link" /><a href="/">website</a></p>
					<ul class="row">
						<li class="col">Followings</li>
						<li class="col">Followers</li>
					</ul>
				</div>
				<footer class="card-footer btn-group d-flex btn-group-toggle p-0" data-toggle="buttons">
					<label class="btn w-100 btn-outline-info">
						<input type="radio" name="pseudo" autocomplete="off" value="cat1"/> Cat 1
					</label>
					<label class="btn w-100 btn-outline-success">
						<input type="radio" name="pseudo" autocomplete="off" value="cat2"/> Cat 2
					</label>
					<!--div class="col">
						<input type="radio" id="pseudo_cat1" name="pseudo" value="cat1" />
						<label for="cat1" class="btn btn-secondary">Cat 1</label>
					</div>
					<div class="col">
						<input type="radio" id="pseudo_cat2" name="pseudo" value="cat2" />
						<label for="cat2" class="btn btn-secondary">Cat 2</label>
					</div-->
				</footer>
			</article></div>
		</section>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>