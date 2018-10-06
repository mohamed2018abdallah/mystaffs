<?php
	$sms = "";
	include("config.php");
	if (isset($_POST['submit'])) {
		# code...
		if ($_POST['title'] == '' or $_POST['description'] == '') {
			# code...
			echo "please fill the empty field and continue";
		}else{

			$image_path = "images/".basename($_FILES['image']['name']);
			$title = $_POST['title'];
			$desc = $_POST['description'];
			$image_name = $_FILES['image']['name'];

				if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
					# code...
					$sms = "uploaded successful";
				}else{
					$sms = "ploblem on uploading file";
				}

			$sql = "INSERT INTO news_posts(title,description,dates,image) VALUES('$title','$desc',CURRENT_TIMESTAMP,'$image_name')";

			if ($conn->query($sql) === TRUE) {
				?>

				<script>
                  alert('post sent successful');
                  window.location.href='index.php';
                </script>

				<?php

			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
		}
	}
?>