<html lang="sv">

	<head>
		<script src="Slide.js"></script>
		<link rel="stylesheet" href="test.css">
	</head>
	<body>
		<div class="solo">
			<div class="content">
				<div class="images">
					<?php
						//Read all files in image folder
						$files = glob('imgs/' . "*");
						$count = count($files);

						//For every file in the image folder load the file
						foreach($files as $img) {
							echo "<img src=".$img.">";
						}

					?>
				</div>
			</div>
		</div>		
	</body>
</html>
