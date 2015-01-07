<?php

	$tmp_file = $_FILES['image']['tmp_name'];
	$filename = $_FILES['image']['name'];

	move_uploaded_file($tmp_file, 'upload_folder/'. $filename);

?>