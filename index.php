
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranks Page</title>
    <link rel="stylesheet" href="assets/foundation/css/foundation.css">
    <link rel="stylesheet" href="assets/foundation/css/app.css">
  </head>
<body>

    <div class="grid-container">
      	<div class="grid-x grid-padding-x">
        	<div class="large-12 cell text-center">
         		<h1>Welcome to our Ranks</h1>
        	</div>
      	</div>

      	<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				<form method="POST" action="request.php" class="grid-x grid-padding-x align-center">
					<div class="medium-3 cell">
						<input name="name" type="text" placeholder="Name">
					</div>
					<div class="medium-3 cell">
						<input name="email" type="email" placeholder="E-mail">
					</div>
					<div class="medium-3 cell">
						<label>
							<select name="rank">
								<option value="0">Rank</option>
								<option value="1">Bronze</option>
								<option value="2">Silver</option>
								<option value="3">Gold</option>
							</select>
						</label>
					</div>
					<div class="medium-3 cell">
						<button class="button primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>


    <script src="assets/foundation/js/vendor/jquery.js"></script>
    <script src="assets/foundation/js/vendor/what-input.js"></script>
    <script src="assets/foundation/js/vendor/foundation.js"></script>
    <script src="assets/js/app.js"></script>
	<?php include 'request.php'; ?>
  </body>
</html>
