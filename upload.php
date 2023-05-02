<html>
<header>
	<script src="slide.js"></script>
</header>
<div class="button">
	<form method="POST">
		<input type="submit" name="yes" id="yes" value="RUN"> 
	</form>
</div>

<?php

function upload() {

	shell_exec(getcwd() . '/draft.py');
}

$target_dir = "uploads/";
$target_file = $target_dir . "uploaded.pdf";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "PDF") {
  echo "Sorry, only PDF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    
    shell_exec(getcwd() . '/tempgen.py');



    $files = glob('tempimgs/' .  "*");
    $count = count($files);
    natsort($files);	
    foreach($files as $img) {
   	
	echo "<div class='content'>";
	    	echo "<img src=".$img.">";
    	echo "</div>";
    }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

if(array_key_exists('yes',$_POST)){

	upload();

}
?>

</html>
