<?php
	include("config.php");

	if (isset($_POST['submit'])) {
		# code...
		$comments_id = $_POST['path'];
		$comments = $_POST['comments'];

			if ($comments != "") {
				# code...
				$sql = "INSERT INTO comments(comments,pos_id,dates) VALUES('$comments','$comments_id',CURRENT_TIMESTAMP)";
				if ($conn->query($sql) === TRUE) {

				?>

				<script>
                  alert('comment sent successful');
                  window.location.href='index.php';
                </script>

				<?php

				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;	
			}
		}
			
		$conn->close();	
	}
?>
